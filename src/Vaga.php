<?php
require_once "Banco.php";

class Vaga
{
    ///principal
    private  $id;
    private  $nome;
    private  $salario;
    private  $localidade;
    private  $descricao;
    private  $beneficio;
    private  $data;
    private  $categoria_id;

    ///interessados
    private $id_interessados;
    private $id_usuario;
    private $id_vaga;
    private $solicitacao;

    ///CONTRATADO
    private $contrato_id;
    private $whatsapp;
    private $email;

    


    ///Busca
    private  $termo;

    ///Conexão
    private  $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

    public function lerVagas(): array
    {
        $sql = "SELECT vaga.nome AS vagas, vaga.*, 
                        categorias.nome AS categoria 
                FROM vaga INNER JOIN categorias 
                ON categorias.id = vaga.categoria_id ORDER BY vagas";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerVagas



    public function inserirVaga()
    {
        $sql = "INSERT INTO vaga(nome, salario, localidade, descricao, beneficio, data, categoria_id, empresa_id) VALUES(:nome, :salario, :localidade, :descricao, :beneficio, :data, :categoria_id, :id_usuario)";


        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":salario", $this->salario, PDO::PARAM_STR);
            $consulta->bindParam(":localidade", $this->localidade, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":beneficio", $this->beneficio, PDO::PARAM_STR);
            $consulta->bindParam(":data", $this->data, PDO::PARAM_STR);
            $consulta->bindParam(":categoria_id", $this->categoria_id, PDO::PARAM_INT);
            $consulta->bindParam("id_usuario", $this->id_usuario, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
    } // fim inserirVaga

    public function pegarVagas()
    {
        $sql = "SELECT id, nome, salario, localidade, descricao, beneficio, data, categoria_id
        FROM vaga WHERE id = ?";
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindParam("s", $_GET['q']);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);


        return $resultado;
    }

    ///////Inserir interessados

    public function insereIntere()
    {
        $sql = "INSERT INTO interessados(id_usuario, id_vaga, solicitacao) VALUES(:id_usuario, :id_vaga, :solicitacao)";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam("id_usuario", $this->id_usuario, PDO::PARAM_INT);
            $consulta->bindParam("id_vaga", $this->id_vaga, PDO::PARAM_INT);
            $consulta->bindParam("solicitacao", $this->solicitacao, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
    }
    /* CONTADOR DE INTERESSES PAINEL ADM*/
    public function ContaInteresse()
    {
        $sql = "SELECT COUNT(*) FROM interessados WHERE usuario_id = :id_usuario";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            // $consulta->bindParam("id_vaga", $this->id_vaga, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetchColumn();
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerUmVaga
    /* FIM CONTADOR */

    /* CONTADOR VAGAS POR ID PAINEL ADM*/
    public function ContaVaga()
    {
        $sql = "SELECT COUNT(*) FROM vaga WHERE empresa_id = :id_usuario";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            // $consulta->bindParam("id_vaga", $this->id_vaga, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetchColumn();
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerUmVaga

    /* FIM CONTA VAGA PAINEL ADM*/
    public function contaInteressados(): array
    {
        $sql = "SELECT COUNT(*) FROM interessados WHERE id_usuario = :id_usuario";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            //$consulta->bindParam("id_vaga", $this->id_vaga, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerUmVaga
    ////FIM INTERESSADOS

    /* MOSTRAR TABELA INTERESSADOS POR PAINEL ADM LIMIT 3 */

    public function mostraInteressados(){
        $sql = "SELECT * FROM interessados WHERE usuario_id = :id_usuario LIMIT 3";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            //$consulta->bindParam("id_vaga", $this->id_vaga, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerUmVaga
    ////FIM INTERESSADOS

    /* MOSTRA INTERESSADOS LIMIT 10 */

    public function mostraInteressado(){
        $sql = "SELECT * FROM interessados WHERE usuario_id = :id_usuario LIMIT 10";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            //$consulta->bindParam("id_vaga", $this->id_vaga, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerUmVaga
    ////FIM INTERESSADOS


    /* VAGAS DE ACORDO COM CADA EMPRESA PAINEL ADMIN */

    public function lerminhaVaga():array
    {
        $sql = "SELECT * FROM vaga WHERE empresa_id = :id_usuario";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id_usuario", $this->id_usuario, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
        return $resultado;
    } // fim lerUmVaga
    
    /* FIM VAGAS DE ACORDO COM CADA EMPRESA */


    ////////////////// FRONT USUARIOS/////////////////
    public function atualizarVaga()
    {
        $sql = "UPDATE vaga SET nome = :nome, categoria_id = :categoria_id, descricao = :descricao, beneficio = :beneficio,
         salario = :salario, localidade = :localidade, data = :data WHERE vaga . id = :id";


        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);

            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":salario", $this->salario, PDO::PARAM_STR);
            $consulta->bindParam(":localidade", $this->localidade, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":beneficio", $this->beneficio, PDO::PARAM_STR);
            $consulta->bindParam(":data", $this->data, PDO::PARAM_STR);
            $consulta->bindParam(":categoria_id", $this->categoria_id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
    } // fim atualizarVaga


    public function excluirVaga()
    {
        $sql = "DELETE FROM vaga WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }
    } // fim excluirVaga


    public function busca()
    {
        $sql = "SELECT nome, salario, localidade, descricao, categoria_id FROM vaga WHERE nome LIKE :termo 
                OR descricao LIKE :termo ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);

            // Juntando o termo com o operador coringa % para o LIKE funcionar
            $termoComOperador = "%" . $this->termo . "%";

            $consulta->bindParam(':termo', $termoComOperador, PDO::PARAM_STR);

            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: " . $erro->getMessage());
        }

        return $resultado;
    }



    /* Utilitários */
    public function formataSalario(float $salario): string
    {
        return "R$ " . number_format($salario, 2, ",", ".");
    }
    function formatarData($data)
    {
        $rData = implode("-", array_reverse(explode("/", trim($data))));
        return $rData;
    }   

    /* GETTERS CONTRATADO */

    public function getContratoid():int {return $this->contrato_id; }
    public function getEmail():string {return $this->email;}
    public function getWhatsapp():string { return $this->whatsapp; }
    /* FIM GETTERS CONTRATADO */

    /* SETTERS CONTRATADO */

    public function setContratoid(int $contrato_id){
        $this->contrato_id = filter_var($contrato_id, FILTER_SANITIZE_NUMBER_INT);
    }

    public function setEmail(string $email){
        $this->email = filter_var($email, FILTER_SANITIZE_STRING);
    }

    public function setWhatsapp(string $whatsapp){
        $this->whatsapp = filter_var($whatsapp, FILTER_SANITIZE_STRING);
    }
    /* SETTERS CONTRATADO FIM */


    /* GETTERS INTERESSADOS */
    public function getIdintere(): int { return $this->id_interessados; }
    public function getIdusuario(): int { return $this->id_usuario; }
    public function getIdvagas(): int { return $this->id_vaga; }
    public function getSolicitacao(): string { return $this->solicitacao; }
    /* FIM GETTERS INTERESSADOS */


    /* SETTERS INTERESSADOS*/
    public function setIdintere(int $id_interessados)
    {
        $this->id_interessados = filter_var($id_interessados, FILTER_SANITIZE_NUMBER_INT);
    }
    public function setIdusuario(int $id_usuario)
    {
        $this->id_usuario = filter_var($id_usuario, FILTER_SANITIZE_NUMBER_INT);
    }
    public function setIdvagas(int $id_vaga)
    {
        $this->id_vaga = filter_var($id_vaga, FILTER_SANITIZE_NUMBER_INT);
    }
    public function setSolicitacao(string $solicitacao)
    {
        $this->solicitacao = filter_var($solicitacao, FILTER_SANITIZE_STRING);
    }
    /* FIM SETTERS */



    /* SETTERS BUSCA */

    public function setTermo(string $termo)
    {
        $this->termo = filter_var($termo, FILTER_SANITIZE_STRING);
    }
    /* FIM SETTERS BUSCA */



     /* GETTERS VAGAS*/
     public function getId(): int
     {
         return $this->id;
     }
     public function getNome(): string
     {
         return $this->nome;
     }
     public function getCategoriaId(): int
     {
         return $this->categoria_id;
     }
     public function getLocalidade(): string
     {
         return $this->localidade;
     }
     public function getDescricao(): string
     {
         return $this->descricao;
     }
     public function getBeneficio(): string
     {
         return $this->beneficio;
     }
     public function getData(): string
     {
         return $this->benefidata;
     }
     public function getSalario(): float
     {
         return $this->salario;
     }
     public function getTermo(): string
     {
         return $this->termo;
     }
     /* FIM GETTERS VAGAS*/


    /* SETTERS VAGA */

    public function setId(int $id)
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    public function setNome(string $nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
    }
    public function setSalario($salario)
    {
        $this->salario = filter_var($salario, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }
    public function setLocalidade(string $localidade)
    {
        $this->localidade = filter_var($localidade, FILTER_SANITIZE_STRING);
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_STRING);
    }

    public function setBeneficio($beneficio)
    {
        $this->beneficio = filter_var($beneficio, FILTER_SANITIZE_STRING);
    }

    public function setData(string $data)
    {
        $this->data = filter_var($data, FILTER_SANITIZE_STRING);
    }

    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = filter_var($categoria_id, FILTER_SANITIZE_NUMBER_INT);
    }

    /* FIM SETTERS */
}
