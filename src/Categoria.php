<?php
require_once "Banco.php";

class Categoria {
    private $id;
    private $nome;

    private $conexao;

    public function __construct(){
        $this->conexao = Banco::conecta();
    }
    public function lerCategorias():array {
        $sql = "SELECT * FROM categorias ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $erro){
            die("Erro: ".$erro->getMessage());
        }

        return $resultado;
    } // fim lerCategorias   
    

    
    public function inserirCategoria(){
        $sql = "INSERT INTO categorias(nome) VALUES(:nome)";
        try{
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $consulta->execute();
        } catch(Exception $erro){
            die("Erro: ".$erro->getMessage());
        }
    } // fim inserirCategoria

    
    public function lerUmCategoria(){
        $sql = "SELECT * FROM categorias WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch(Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }

        return $resultado;
    } // fim lerUmCategoria


    public function atualizarCategoria(){
        $sql = "UPDATE categorias SET nome = :nome WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $consulta->execute();
        } catch(Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }
    } // fim atualizarCategoria


    public function excluirCategoria(){
        $sql = "DELETE FROM categorias WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch(Exception $erro){
            die("Erro: " .$erro->getMessage());
        }
    } // fim excluirCategoria

    public function vagaPorCat(){
        $sql = "SELECT 
        c.id,
        c.nome,
        count(v.id) as quantidade
        FROM categorias c
        LEFT JOIN
        vaga v ON v.categorias_id = c.id
        GROUP BY
        c.id,
        c.nome
        ORDER BY
        c.nome;
        ";
       try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erro){
        die("Erro: ".$erro->getMessage());
    }

    return $resultado;
} // fim lerCategorias   
// fim excluirCategoria





    /* Getters e Setters para o acesso das propriedades */
    public function getId():int{
        return $this->id;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setId(int $id){
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }

    public function setNome(string $nome){
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
    }

} // fim Categoria