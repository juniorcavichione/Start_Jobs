<?php

include_once('./includes/cabecalho.php');

require_once "src/Acesso.php";
require_once "src/Usuario.php";

$sessao = new Acesso;
$usuario = new Usuario;

if ($_SESSION['tipo'] != "") {
	echo "<script>alert('Voçe Ja está Logado ;-)')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}

?>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<?php include "includes/header.php" ?>

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

									var_dump($_POST['senha']);
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
									$mensagem = "nao foi possivel logar";
									$mensagem;
								}
								$mensagem = "Digite usuario e senha";
								$mensagem;
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
										<button class="button primary fit mb-3" name="entrar" type="submit">Logar</button>
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
								<?php if (isset($_POST['recupe'])){
								echo "<script>alert('Voçe Ja está Logado ;-)')</script>";
								$mensagem = "Clicado enviado email";
								$mensagem;
									/* $buscarUser = $usuario->buscaUsuario();
									if($buscarUser['email'] == $_POST['recupera-mail']){
									} */
								}?>

									<h3 class="text-center">Recupe Sua senha</h3>
									<div class="modal-body p-5 pt-0">
										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" id="email" name="recupera-mail">
											<label for="email">Email </label>
										</div>
										<input type="submit" value="Recuperar" name="recupe" class="button primary fit" />
										<hr class="my-4">
										<h2 class="fs-5 fw-bold mb-3">Ou tambem pode</h2>
										<a id="recupera_voltar_logar" class="button primary fit mb-3" type="button"> Efetuar login </a>
										<a id="recupera_voltar_registro" class="button primary fit" type="button"> Cadastre se </a>
									</div>
								</form>

								<!--====================================================
				  REGISTRAR
				  ======================================================-->

								<form id="register-form" style="display:none;">
									<h3 class="text-center">Registre</h3>
									<div class="modal-body p-5 pt-0">

										<div class="form-floating mb-3">
											<input type="text" class="form-control rounded-4" id="nome" name="nome">
											<label for="nome">Nome:</label>
										</div>
										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" id="email" name="email">
											<label for="email">Endereço de e-mail</label>
										</div>
										<div class="form-floating mb-3">
											<label for="recipient-name" class="form-label"></label>
											<input type="file" name="Img" class="form-control">
										</div>
										<div class="form-floating mb-3">
											<input type="password" class="form-control rounded-4" name="senha"
												id="senha">
											<label for="senha">Senha</label>
										</div>
										<div class="form-floating mb-3">
											<input type="password" class="form-control rounded-4" name="senha1"
												id="senha1">
											<label for="senha2">
												<span id="ValorNota" name="valorNota"></span>
												<span id="situacao" name="situacao"></span>
												<span id="mensagem" name="mensagem"></span>
											</label>
										</div>
										<div class="form-floating form-floating-inline mb-3">
											<input type="radio" class="btn btn-outline" name="tipo" value="empresa"
												id="success-outlined" autocomplete="off">
											<label class="btn btn-outline" for="success-outlined">Cadastrar vaga</label>
											<input type="radio" class="btn-check" name="tipo" value="comum"
												id="danger-outlined" autocomplete="off">
											<label class="btn btn-outline" for="danger-outlined">Cadastro
												curriculo</label>
											<button class="button primary fit" name="inserir">Cadastre-se</button>
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
	<?php include_once('./includes/footer.php'); ?>