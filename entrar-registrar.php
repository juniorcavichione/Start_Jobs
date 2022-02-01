<?php
include_once('./includes/cabecalho.php');
require_once "src/Acesso.php";
require_once "src/Usuario.php";
$usuario = new Usuario;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './phpMailer/Exception.php';
require './phpMailer/PHPMailer.php';
require './phpMailer/SMTP.php';
if(isset($_SESSION['tipo'])) {
	echo "<script>alert('Voçe Ja está Logado ;-)')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}?>
<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<?php include "includes/header.php"?>

				<!--====================================================
				  LOGAR OU REGISTRAR
				  ======================================================-->
				<section id="login">
					<div class="modal-dialog">
						<div class="modal-content rounded-5 shadow">
							<div class="modal-header pb-4 border-bottom-0">

								<h2 class="text-center fw-bold mb-0">Entre ou se Cadastre</h2>
							</div>
							<div id="div-forms">
								<?php if (isset($_POST['entrar'])) {
									$usuario->setEmail($_POST['email']);
									$dados = $usuario->buscaUsuario();
									//var_dump($_POST['senha']);
									//se foi localizado um usuario pelo email
									if ($dados != null) {
										//então verificamos a senha digitada com o banco
										if (password_verify($_POST['senha'], $dados['senha'])) {
											$sessao = new Acesso;
											$sessao->login($dados['id'], $dados['nome'], $dados['tipo'], $dados['Img']);
										} else {
											//se a senha for diferente não loga
											//header("location:logar.php?senha_incorreta");
											$mensagem = "Senha incorreta";
											$mensagem;
										}
									} else {
										//header("location:logar.php?nao_encontrado");
										$mensagem = "Usuario nao encontrado";
										$mensagem;
									}
									//echo "<script>alert('estou aqui')</script>";
								} else {
                                    //$mensagem = "nao foi possivel logar";
									//$mensagem;
								}
								//$mensagem = "Digite usuario e senha";
								//$mensagem;
								?>

								<form id="login-form" method="POST">
									<h3 class="text-center">Login</h3>

									<div class="modal-body pt-0">
										<?php if (isset($mensagem)) { ?>
										<p class="alert alert-success">
											<?= $mensagem ?>
										</p>
										<?php } ?>
										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" name="email" id="email">
											<label for="email">Email </label>
										</div>
										<div class="form-floating mb-3">
											<input type="password" class="form-control rounded-4" name="senha"
												id="floatingPassword">
											<label for="floatingPassword">Senha</label>
										</div>
										<button class="button primary fit mb-3" name="entrar"
											type="submit">Logar</button>
										<hr class="my-4">

										<h2 class="fs-5 fw-bold">Ou tambem pode</h2>
										<button id="login_vai_recupera" class="button primary fit mb-3" type="button">

											Recupere a senha
										</button>
										<button id="login_vai_registrar" class="button primary fit" type="button">

											Cadastre se
										</button>
									</div>
								</form>
								<!--==================================================== RECUPERE A SENHA ======================================================-->

								<form id="recuperar-form" method="POST" style="display:none;">
									<?php 
								
								if(!empty($_POST['recupera-mail'])){
									$usuario->setEmail($_POST['recupera-mail']);
									$dados = $usuario->buscaUsuario();
									if($dados['email'] == $_POST['recupera-mail']){
										$chave_recupera = password_hash($dados['id'], PASSWORD_DEFAULT);
										$usuario->setId($dados['id']);
										$usuario->setChave($chave_recupera);
										$usuario->enviaCodigo();
										$linkVerif = "http://localhost/Start_Jobs/recupera-senha.php?chave=$chave_recupera";
										$mail = new PHPMailer(true);
										$mail->CharSet = "UTF-8";

											try {
												//Server settings
												$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
												$mail->isSMTP();                                            //Send using SMTP
												$mail->Host       = 'smtp.mailtrap.io';                  //Set the SMTP server to send through
												$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
												$mail->Username   = '479c15c149b717';                     //SMTP username
												$mail->Password   = '21fc016e98cdb0';                               //SMTP password
												$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
												$mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
							
													//Recipients
												$mail->setFrom('contato@startjobs.com.br', 'Recuperacao');
												$mail->addAddress($dados['email'], $dados['nome']);     //Add a recipient
							
							
												//Content
												$mail->isHTML(true);                                  //Set email format to HTML
												$mail->Subject = 'Recuperar senha';
												$mail->Body    = '<p>Prezado(a)' .$dados['nome']. '<b> Voçê solicitou alteração de senha ?</b><hr><br>
												para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole no endereço de seu navegador<hr><a href='.$linkVerif.'>Clique aqui para redefinir sua senha</a><br>
												Se você não solicitou essa alteração, nenhuma acção é necessária. Sua senha permanecerá a mesma até que você ative este còdigo.<hr><br>';
												$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
							
							
												$mail->send();
							
										}
										catch(Exception $e) {
											echo "Mensagem não enviada Verifique os dados: {$mail->ErrorInfo}";
										}
									   echo "<script>alert('Codigo de Redefinição enviado para o e-mail cadastrado ;-)')</script>";
									   //$_SESSION['msg'] = "<p class='alert alert-success'>Codigo de Redefinição enviado para o e-mail cadastrado</p>";

									}else
									{
						                echo "<script>alert('Email Não encontrado no banco ;-)')</script>";

									}
									//echo "<script>alert('Voçe Ja está Logado ;-)')</script>";

								}				
								?>

									<h3 class="text-center">Recupe Sua senha</h3>
									<div class="modal-body p-5 pt-0">
										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" id="email"
												name="recupera-mail"
												value="<?php if(isset($_POST['recupera-mail'])){ echo $_POST['recupera-mail'];} ?>">
											<label for="email">Email </label>
										</div>
										<button name="recupe" value="Recuperar" class="button primary fit"><i
												class="fa fa-sign-in"></i> Recuperar</button>
										<!-- <input type="submit" value="Recuperar" name="recupe"
											class="button primary fit" /> -->
										<hr class="my-4">
										<h2 class="fs-5 fw-bold mb-3">Ou tambem pode</h2>
										<a id="recupera_voltar_logar" class="button primary fit mb-3" type="button">
											Efetuar login </a>
										<a id="recupera_voltar_registro" class="button primary fit" type="button">
											Cadastre se </a>
									</div>
								</form>
<!--==================================================== REGISTRAR  ======================================================-->

								<form id="register-form" style="display:none;" method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<?php 
								if(isset($_POST['inserir']))
								{
									//$usuario = new Usuario;
									$Img = $_FILES['Img']['name'];
									$Img_size =  $_FILES['Img']['size'];
									$tmp_name =  $_FILES['Img']['tmp_name'];
									$Img_type = $_FILES['Img']['type'];
									$error =  $_FILES['Img']['error'];								  
									//$novo_nome = TratarNomeArquivo($Img); 
									$diretotio = "./uploads/";								  
									move_uploaded_file($_FILES['Img']['tmp_name'], $diretotio.$Img);
									//echo "<script>alert('Seu cadastro foi efetuado com sucesso')</script>";
									$usuario->setNome($_POST['nome-cadastro']);
									$usuario->setEmail($_POST['email-cadastro']);
									$usuario->setSenha( $usuario->codificaSenha($_POST['senha-cadastro']));
									$usuario->setTipo($_POST['tipo-cadastro']);
									$usuario->setEndereco($_POST['endereco-cadastro']);
									$usuario->setSobre($_POST['sobre-cadastro']);
									$usuario->setSexo($_POST['sexo-cadastro']);
									$usuario->setHabilidade($_POST['habilidade-cadastro']);
									$usuario->setImg($Img);
									$varnull = "NULL";
									$usuario->setChave($varnull);
									//echo "<script>alert('Seu cadastro foi efetuado com sucesso')</script>";
									if($_POST['senha'] === $_POST['senha1']){
										$usuario->inserirUsuario();
									  echo "<script>alert('Seu cadastro foi efetuado com sucesso')</script>";
									  echo "<script>window.open('entrar-registrar.php','_self')</script>";								  
									}
									$status = "Senhas não confere escreva novamente";
								   //echo "<script>window.open('index.php','_self')</script>";
									//header("location:index.php");
								}								
								?>
									<h3 class="text-center">Registre</h3>
									<div class="modal-body p-5 pt-0">

										<div class="form-floating mb-3">
											<input type="text" class="form-control rounded-4" id="nome" name="nome-cadastro">
											<label for="nome">Nome:</label>
										</div>
										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" id="email" name="email-cadastro">
											<label for="email">Endereço de e-mail</label>
										</div>
										<div class="form-floating mb-3">
										<label for="recipient-name" class="form-label">Imagen de perfil</label>
											<input type="file" name="Img" class="form-control">
										</div>
										<div class="form-floating mb-3">
											<input type="text" class="form-control rounded-4" name="endereco-cadastro"
												id="endereco-cadastro">
											<label for="endereco-cadastro">Endereço</label>
										</div>
										<div class="form-floating mb-3">
											<input type="text" class="form-control rounded-4" name="sobre-cadastro"
												id="endereco-cadastro">
											<label for="sobre-cadastro">Sobre</label>
										</div>
										<div class="form-floating mb-3">
											<input type="text" class="form-control rounded-4" name="sexo-cadastro"
												id="sexo-cadastro">
											<label for="sexo-cadastro">Sexo</label>
										</div>
										<div class="form-floating mb-3">
											<input type="text" class="form-control rounded-4" name="habilidade-cadastro"
												id="endereco-cadastro">
											<label for="habilidade-cadastro">Habilidade</label>
										</div>
										<div class="form-floating mb-3">
											<input type="password" class="form-control rounded-4" name="senha-cadastro"
												id="senha">
											<label for="senha">Senha</label>
										</div>

										<div class="form-floating mb-3">
											<input type="password" class="form-control rounded-4" name="senha1-cadastro"
												id="senha1">
											<label for="senha1">
												<span id="ValorNota" name="valorNota"></span>
												<span id="situacao" name="situacao"></span>
												<span id="mensagem" name="mensagem"></span>
											</label>
										</div>
										<div class="form-floating form-floating-inline mb-3">
											<div class="row mb-3">
												<div class="col-4 col-12-small">
													<input type="radio" id="comun" name="tipo-cadastro" value="comum" checked>
													<label for="comun">Cadastrar curriculo</label>
												</div>
												<div class="col-4 col-12-small">
													<input type="radio" id="empresa" name="tipo-cadastro" value="empresa">
													<label for="empresa">Cadastrar vagas</label>
												</div>
											</div>

											<button class="button primary fit mt-2" type="submit" name="inserir">Cadastre-se</button>
											<hr class="my-4">
											<small class="text-muted">Ao clicar em Cadastre-se, você concorda com os
												termos de uso.</small>
											<div class="col-12 col-12-small mt-3">
												<button id="registra_voltar_recupera" class="button mb-2 primary fit"
													type="button"> Recupere a senha</button>
												<button id="registra_voltar_logar" class="button primary fit"
													type="button">Efetuar login</button>
											</div>
										</div>

									</div>

								</form>
							</div>

						</div>
					</div>

				</section>
			</div>
		</div>
		<?php include_once('./includes/sidebar.php'); ?>
	</div>
	<script>
var campo1 = document.getElementById("senha-cadastro");
var campo2 = document.getElementById("senha1-cadastro");
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