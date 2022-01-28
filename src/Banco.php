<?php
abstract class Banco {
    private static $conexao;

    public static function conecta():PDO{
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "emprego";

        try {
            self::$conexao = new PDO(
                "mysql:host=$servidor; dbname=$banco; charset=utf8",
                $usuario,
                $senha
            );

            self::$conexao->setAttribute(
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
        } catch(Exception $erro){
            die("Erro: ". $erro->getMessage());
        }

        return self::$conexao;
    }
} 