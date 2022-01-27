<?php
require_once "Banco.php";

class Usuario {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $tipo;
    private string $Img;


    public function __construct() {
        $this->conexao = Banco::conecta();
    }

    public function inserirUsuario():void {
        $sql = "INSERT INTO usuarios(nome, email, senha, tipo, Img) VALUES(:nome, :email, :senha, :tipo, :Img)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(':email', $this->email, PDO::PARAM_STR);
            $consulta->bindParam(':senha', $this->senha, PDO::PARAM_STR);
            $consulta->bindParam(':tipo', $this->tipo, PDO::PARAM_STR);
            $consulta->bindParam(':Img', $this->Img, PDO::PARAM_STR);

            $consulta->execute();
        } catch(Exception $erro){ 
            die( "Erro: " .$erro->getMessage());
        }
    }


    public function lerUsuarios():array{
        $sql = "SELECT * FROM usuarios ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $erro){ 
            die( "Erro: " .$erro->getMessage());
        }
        return $resultado;
    }


    public function lerUmUsuario():array {
        $sql = "SELECT * FROM usuarios WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch(Exception $erro){ 
            die( "Erro: " .$erro->getMessage());
        }

        return $resultado;
    }

    public function atualizarUsuario():void {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, tipo = :tipo, Img = :Img WHERE id = :id";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(':email', $this->email, PDO::PARAM_STR);
            $consulta->bindParam(':senha', $this->senha, PDO::PARAM_STR);
            $consulta->bindParam(':tipo', $this->tipo, PDO::PARAM_STR);
            $consulta->bindParam(':Img', $this->Img, PDO::PARAM_STR);
            $consulta->execute();
        } catch(Exception $erro){ 
            die( "Erro: " .$erro->getMessage());
        }
    }

    public function excluirUsuario(){
        $sql = "DELETE FROM usuarios WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(':id', $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch(Exception $erro){
            die("Erro: " .$erro->getMessage());
        }
    }


    public function buscaUsuario(){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        try{
            ///
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        }
        catch (Exception $erro){
            die("Erro:" .$erro->getMessage());

        }
        return $resultado;
    }

    ///duplicada verificar a funcão adaptar
    public function ExisteUsuario(){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        try{
            ///
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        }
        catch (Exception $erro){
            die("Erro:" .$erro->getMessage());

        }
        return $resultado;

    }

    public function codificaSenha(string $senha):string{
        return password_hash($senha, PASSWORD_DEFAULT);
    } 

    public function verificaSenha($senhaDigitadaNoForm, $senhaExistenteNoBanco)

    {
        //se opassword verif  entende que as senhas são as mesmas
        if( password_verify($senhaDigitadaNoForm, $senhaExistenteNoBanco)){
            //então retorne a senha já existente no banco
            return $senhaExistenteNoBanco;

        }
        else
        {
            ///se não retorne a nova senha digitada e codificada
            return $this->codificaSenha($senhaDigitadaNoForm);
        }
    }

   


    public function getId():int { return $this->id; }
    public function getNome():string { return $this->nome; }
    public function getEmail():string { return $this->email; }
    public function getSenha():string { return $this->senha; }
    public function getTipo():string { return $this->tipo; }
    public function getImg():string { return $this->Img; }


    public function setId( $id ){
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
    }
    public function setNome( $nome ){
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
    }
    public function setEmail( $email ){
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    public function setSenha( $senha ){
        $this->senha = $senha;
    }
    public function setTipo( $tipo ){
        $this->tipo = filter_var($tipo, FILTER_SANITIZE_STRING);
    }
    public function setImg( $Img ){
        $this->Img = filter_var($Img, FILTER_SANITIZE_STRING);
    }

}