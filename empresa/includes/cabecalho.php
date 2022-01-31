<?php 
require_once "../src/Acesso.php";
$sessao = new Acesso;
$sessao->verificaPermissao();

if(isset($_GET['sair'])){
	$sessao->logout();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Inserindo tags metas -->
	<!-- Descição não ultrapassar 160 caracteres -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Encontre seu emprego aqui de forma totalmente gratuita">
	<!-- Palavras chaves Quanto menos palavras chaves melhor-->
	<meta name="keywords" content="Emprego, Trabalho">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/style.css" />


	<title>Start_Jobs</title>
	<!-- Inserindo o Favicon -->
	<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
</head>