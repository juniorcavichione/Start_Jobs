<?php
require_once "Banco.php";

class Vaga {
    private  $id;
    private  $nome;
    private  $salario;
    private  $localidade;
    private  $descricao;
    private  $beneficio;
    private  $data;
    private  $categoriaId;
    
    private  $termo;

    private  $conexao;

    public function __construct(){
        $this->conexao = Banco::conecta();
    }

    public function lerVagas():array {
        $sql = "SELECT vaga.nome AS vagas, vaga.*, 
                        categorias.nome AS categoria 
                FROM vaga INNER JOIN categorias 
                ON categorias.id = vaga.categorias_id ORDER BY vagas";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die( "Erro: " .$erro->getMessage());
        }
        return $resultado;
    } // fim lerVagas


    
    public function inserirVaga(){
        $sql = "INSERT INTO vaga(nome, salario, localidade, descricao, beneficio, data, categorias_id) VALUES(:nome, :salario, :localidade, :descricao, :beneficio, :data, :categorias_id)";

        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":salario", $this->salario, PDO::PARAM_STR); 
            $consulta->bindParam(":localidade", $this->localidade, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":beneficio", $this->beneficio, PDO::PARAM_STR);
            $consulta->bindParam(":data", $this->data, PDO::PARAM_STR);
            $consulta->bindParam(":categorias_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die( "Erro: " .$erro->getMessage());
        }
    } // fim inserirVaga

    public function pegarVagas(){
        $sql = "SELECT id, nome, salario, localidade, descricao, beneficio, data, categoria_id
        FROM vaga WHERE id = ?";
         $consulta = $this->conexao->prepare($sql);
         $consulta->bindParam("s", $_GET['q']);
         $consulta->execute();
         $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

         
         return $resultado;





    }


    public function lerUmaVaga(){
        $sql = "SELECT * FROM vaga WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die( "Erro: " .$erro->getMessage());
        }
        return $resultado;        
    } // fim lerUmVaga


    public function atualizarVaga(){
        $sql = "UPDATE vaga SET nome = :nome, salario = :salario,
        localidade = :localidade, descricao = :descricao, data = :data,
        categorias_id = :categorias_id WHERE id = :id";
        

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":salario", $this->salario, PDO::PARAM_STR); 
            $consulta->bindParam(":localidade", $this->localidade, PDO::PARAM_STR);
            $consulta->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindParam(":beneficio", $this->beneficio, PDO::PARAM_STR);
            $consulta->bindParam(":data", $this->data, PDO::PARAM_STR);
            $consulta->bindParam(":categorias_id", $this->categoriaId, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die( "Erro: " .$erro->getMessage());
        }
    } // fim atualizarVaga


    public function excluirVaga(){
        $sql = "DELETE FROM vaga WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die( "Erro: " .$erro->getMessage());
        }
    } // fim excluirVaga


    public function busca(){
        $sql = "SELECT nome, salario, localidade, descricao, categoria_id FROM vaga WHERE nome LIKE :termo 
                OR descricao LIKE :termo ORDER BY nome";
        
        try {
            $consulta = $this->conexao->prepare($sql);

            // Juntando o termo com o operador coringa % para o LIKE funcionar
            $termoComOperador = "%".$this->termo."%";

            $consulta->bindParam(':termo', $termoComOperador, PDO::PARAM_STR);

            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $erro){
            die( "Erro: " .$erro->getMessage());
        }
        
        return $resultado;
    }



    /* Utilitários */
    public function formataSalario(float $salario):string {
        return "R$ ".number_format( $salario, 2, ",", "." );
    }
    function formatarData($data){
        $rData = implode("-", array_reverse(explode("/", trim($data))));
        return $rData;
     }



    /* Getters */
    public function getId():int { return $this->id; }
    public function getNome():string { return $this->nome; }
    public function getCategoriaId():int { return $this->categoriaId; }
    public function getLocalidade():string { return $this->localidade; }
    public function getDescricao():string { return $this->descricao; }
    public function getBeneficio():string { return $this->beneficio; }
    public function getData():string { return $this->benefidata; }

    public function getSalario():float { return $this->salario; }
    public function getTermo():string { return $this->termo; }

    /* Setters */
    public function setTermo(string $termo) {
        $this->termo = filter_var($termo, FILTER_SANITIZE_STRING);
    }

    public function setId(int $id) {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    public function setNome(string $nome) {
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
    }
    public function setSalario($salario) {
        $this->salario = filter_var(
            $salario, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION
        );
    }
    public function setLocalidade(string $localidade) {
        $this->localidade = filter_var($localidade, FILTER_SANITIZE_STRING);
    }
    public function setDescricao(string $descricao) {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_STRING);
    }
    public function setBeneficio( $beneficio) {
        $this->beneficio = filter_var($beneficio, FILTER_SANITIZE_STRING);
    }
    public function setData(string $data) {
        $this->data = filter_var($data, FILTER_SANITIZE_STRING);
    }
    public function setCategoriaId( $categoriaId) {
        $this->categoriaId = filter_var($categoriaId, FILTER_SANITIZE_NUMBER_INT);
    }


}