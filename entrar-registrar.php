<?php include_once('./includes/cabecalho.php')?>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<header id="header">
					<a href="index.php" class="logo"><strong>Start_<span style="color: #2c76ee">Jobs</span></strong></a>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://github.com/juniorcavichione/Start_Jobs" target="_blank"
								class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<?php if(!isset($_SESSION['usuario'])){
							echo "<li><a href='login.html' id='login' class='button big'>Sair</a></li>";
							}else{
								echo "<li><a href='login.html' id='login' class='button big'>Login</a></li>";
							}?>
					</ul>
				</header>

				<!-- <section id="banner">
					<div class="content">
						
						<h3>Formulario de cadastro</h3>
						<form method="post" action="#">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
								</div>
								
								<div class="col-12">
									<select name="demo-category" id="demo-category">
										<option value="">- Category -</option>
										<option value="1">Manufacturing</option>
										<option value="1">Shipping</option>
										<option value="1">Administration</option>
										<option value="1">Human Resources</option>
									</select>
								</div>
								
								<div class="col-4 col-12-small">
									<input type="radio" id="demo-priority-low" name="demo-priority" checked>
									<label for="demo-priority-low">Low</label>
								</div>
								<div class="col-4 col-12-small">
									<input type="radio" id="demo-priority-normal" name="demo-priority">
									<label for="demo-priority-normal">Normal</label>
								</div>
								<div class="col-4 col-12-small">
									<input type="radio" id="demo-priority-high" name="demo-priority">
									<label for="demo-priority-high">High</label>
								</div>
								
								<div class="col-6 col-12-small">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy</label>
								</div>
								<div class="col-6 col-12-small">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">I am a human</label>
								</div>
								
								<div class="col-12">
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message"
										rows="6"></textarea>
								</div>
								
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Cadastrar" name="cadastrar" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>					
				</section> -->
				<!--====================================================
                    LOGAR OU REGISTRAR
======================================================-->
				<section id="login">
						<div class="modal-content rounded-5 shadow">
							<div class="modal-header p-5 pb-4 border-bottom-0">
								<h2 class="text-center fw-bold mb-0">Entre ou se Cadastre</h2>
							</div>
							<div id="div-forms">
								<form id="login-form">
									<h3 class="text-center">Login</h3>
									<div class="modal-body p-5 pt-0">

										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" id="email">
											<label for="email">Email </label>
										</div>
										<div class="form-floating mb-3">
											<input type="password" class="form-control rounded-4" id="floatingPassword">
											<label for="floatingPassword">Senha</label>
										</div>
										<button class="w-100 mb-2 btn btn-lg rounded-4" name="entrar"
											type="submit">Logar</button>
										<hr class="my-4">

										<h2 class="fs-5 fw-bold mb-3">Ou tambem pode</h2>
										<button id="login_vai_recupera"
											class="w-100 py-2 mb-2 btn btn-outline rounded-4" type="button">

											Recupere a senha
										</button>
										<button id="login_vai_registrar"
											class="w-100 py-2 mb-2 btn btn-outline rounded-4" type="button">

											Cadastre se
										</button>
									</div>
								</form>

								<!-- RECUPERE SUA SENHA AQUI -->

								<form id="recuperar-form" style="display:none;">
									<h3 class="text-center">Recupe Sua senha</h3>
									<div class="modal-body p-5 pt-0">

										<div class="form-floating mb-3">
											<input type="email" class="form-control rounded-4" id="email">
											<label for="email">Email </label>
										</div>
										<button class="w-100 btn btn-lg rounded-4 btn" name="entrar"
											type="submit">Recuperar</button>
										<hr class="my-4">

										<h2 class="fs-5 fw-bold mb-3">Ou tambem pode</h2>
										<button id="recupera_voltar_logar"
											class="w-100 py-2 mb-2 btn btn-outline rounded-4" type="button">
											<svg class="bi me-1" width="16" height="16">
												<use xlink:href="#twitter" /></svg>
											Efetuar login
										</button>
										<button id="recupera_voltar_registro"
											class="w-100 py-2 mb-2 btn btn-outline rounded-4" type="button">

											Cadastre se
										</button>
									</div>
								</form>

								<!-- REGISTRE SE MODAL  -->

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
											<label class="btn btn-outline" for="success-outlined">Cadastrar
												vaga</label>

											<input type="radio" class="btn-check" name="tipo" value="comum"
												id="danger-outlined" autocomplete="off">
											<label class="btn btn-outline" for="danger-outlined">Cadastro
												curriculo</label>
											<button class="button primary fit"
												name="inserir">Cadastre-se</button>
												<hr class="my-4">

											<small class="text-muted">Ao clicar em Cadastre-se, você concorda com os termos de uso.</small>
											<hr class="my-4">
											
											
											<div class="col-12 col-12-small">
											
													<button id="registra_voltar_recupera" class="button mb-2 primary fit" type="button"> Recupere a senha</button>
													
														<button id="registra_voltar_logar" class="button primary fit" type="button">Efetuar login</button>
													
												
											</div>
										</div>

									</div>

								</form>
							</div>

						</div>

				</section>
			</div>
		</div>
		<?php include_once('./includes/sidebar.php');?>
	</div>
	<?php include_once('./includes/footer.php');?>