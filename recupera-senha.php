<?php 
include_once('./includes/cabecalho.php');
require_once "./src/Usuario.php";

$chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);

$usuario = new Usuario;

$usuario->setChave($chave);
$conferir = $usuario->verificaCodigo();
 
//Verifica link na get 
if(!empty($_GET['chave'])){

    //confere se a chave e a mesma do banco de dados
    if($conferir != 0 ){
        //echo "<script>alert('Aqui foi localizado o id conforme o confronto do codigo com o salvo no banco')</script>";
        if(isset($_POST['redefinir'])){
            //echo "<script>alert('Aqui foi ')</script>";
            if($_POST['senha'] === $_POST['senha1']){
                $usuario->setId($conferir['id']);
                $unicoUser = $usuario->lerUmUsuario();                
                $usuario->setSenha($usuario->codificaSenha($_POST['senha']));
                $varnull = "NULL";
                $usuario->setChave($varnull);
                $usuario->enviaSenha();
                echo "<script>window.location.href='entrar-registrar.php?senha-atualizada';</script>"; 
            }
        }else
        {
            $_SESSION['msg'] = "<p class='dark'> Senha Errada Digite novamente</p>";
        }
     }
     else
     {
         //Sem Dados cai aqui
         $_SESSION['msg'] = "<p class='dark'>esta vazio Nao tem dados </p>";
     }
}
else
{
    ///sem link cai aqui
    echo "<script>window.location.href='index.php';</script>"; 
}
 
 ?>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <?php include "includes/header.php" ?>
                <!-- Banner -->
                <section id="login">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-5 shadow">
                            <div class="modal-header pb-4 border-bottom-0">

                                <h2 class="text-center fw-bold mb-0">Defina sua nova senha</h2>
                            </div>
                            <div id="div-forms">
                                <form id="login-form" method="POST">
                                    <h3 class="text-center">Digite sendo iguais</h3>

                                    <div class="modal-body pt-0">
                                        <?php if (isset($mensagem)) { ?>
                                        <p class="alert alert-success">
                                            <?= $mensagem ?>
                                        </p>
                                        <?php } var_dump($conferir);?>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control rounded-4" name="senha"
                                                id="senha">
                                            <label for="senha">Digite a senha</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control rounded-4" name="senha1"
                                                id="senha1">
                                            <label for="senha1">Redigite a mesma senha</label>
                                            <span id="ValorNota" name="valorNota"></span>
                                            <span id="situacao" name="situacao"></span>
                                            <span id="mensagem" name="mensagem"></span>
                                        </div>
                                        <button class="button primary fit mb-3" name="redefinir" type="submit">Atualizar</button>
                                    </div>
                                </form>
                                <!--==================================================== RECUPERE A SENHA ======================================================-->

                            </div>

                        </div>
                    </div>

                </section>
                <!-- 	<hr>				
				<h2>Vagas</h2> -->
            </div>
        </div>
        <?php include_once('./includes/sidebar.php'); ?>
    </div>
    <script>
var campo1 = document.getElementById("senha");
var campo2 = document.getElementById("senha1");
var media = document.getElementById("media");
var resultado = document.getElementById("ValorNota");
var reprovado = document.getElementById("situacao");
var aprovado = document.getElementById("situacao");


function trocaCor() {
  document.getElementById("situacao").style.color = "red";
}
function Aprovado() {
  document.getElementById("situacao").style.color = "green";
}

var somenteNumeros = new RegExp("[^0-9]", "g");

var toNumber = function (value) {
  var number = value.replace(somenteNumeros, "");    
  number = parseInt(number);    
  if (isNaN(number)) 
    number = 0;
  return number;
}

var somenteNumeros = function (event) {
  event.target.value = toNumber(event.target.value);
}

var onInput = function (event) {
  var num1 = toNumber(senha.value);
  var num2 = toNumber(senha1.value);  

  if (num1 != "" && num2 != "" && num1 === num2)
    {
    	//alert('senha iguais');
      aprovado.textContent = ("Senhas Corretas");
      Aprovado();
    }
    else
    {
      //	alert('senhas diferentes');
        reprovado.textContent = ("Senha errada digite novamente");
        trocaCor();
    }

    if(num1 < 1){
    aprovado.textContent = ("Digite a mesma senha");
      Aprovado().focus();
  }
}

senha.addEventListener("input", somenteNumeros);
senha1.addEventListener("input", somenteNumeros);
resultado.addEventListener("input", somenteNumeros);
resultado.addEventListener("input", onInput);
senha.addEventListener("input", onInput);
senha1.addEventListener("input", onInput);

onInput();
</script>
    <?php include_once('./includes/footer.php'); ?>