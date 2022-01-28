<?php 

class Acesso {

    public function __construct() {

        //inicializando uma sessão no php
        session_start();
    }
    public function login(string $id, string $nome, string $tipo, string $Img){
        //Capturar os dados de id nome e tipo e armazena-los na sessão
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['Img'] = $Img;

        if ($tipo == "empresa"){
            header("location:./empresa/index.php?minha-conta");
        } elseif($tipo == "comum"){
            header("location:./usuario/index.php?comun");
        } elseif($tipo == "administrador"){
            header("location:index.php?administrador");
        }        
    }

    public function verificaAcesso(){
    
        if(!isset($_SESSION['id'])){
            // então detrua quarquer resquicio da sessão
            session_destroy();
    
            //e force o usuario a continuar na pagina
            header("location:../index.php?acesso_negado");
        }else{
            return true;
    
        }
    }
    public function logout(){
        session_destroy();
        header("location:./index.php");
        exit;// // or die();
    }

    public function verificaPermissao(){
        if($_SESSION['tipo'] != "empresa"){
            header("location:../index.php?nao_permitido");
            exit;
        }
    }
    public function verificaUsercomun(){
        if($_SESSION['tipo'] != "comum"){
            header("location:../index.php?nao_permitido");
            exit;
        }
    }



}