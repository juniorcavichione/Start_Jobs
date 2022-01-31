	<?php 
	require_once "../src/Usuario.php";
	require_once "../src/Vaga.php";

	$usuario = new Usuario;
	$usuario->setId($_SESSION['id']);
	$dados = $usuario->lerUmUsuario();	

	$vaga = new Vaga;
	$vaga->setIdusuario($_SESSION['id']);

	$contaprete = $vaga->ContaInteresse();
	$contavaga = $vaga->ContaVaga();
	?>

	<!-- Banner -->
	<section>
		<div class="content">
			<header>
				<pre><?php //var_dump($dados) ?> </pre>
				<h1>Minha Conta Empresa</h1>
				<p>Painel Administrativo</p>
				<pre><?php //echo $contaprete;?></pre>
			</header>
			<!-- #page-wrapper begin -->
			<div class="container-fluid">
				<!-- container-fluid begin -->
				<div class="row mb-3 rounded">
					<!-- row no: 2 begin -->
					<div class="col-lg-3 col-md-6">
						<!-- col-lg-3 col-md-6 begin -->
						<div class="panel panel-primary">
							<!-- panel panel-primary begin -->

							<div class="panel-heading box">
								<!-- panel-heading begin -->
								<div class="row">
									<!-- panel-heading row begin -->
									<div class="col-xs-3">
										<!-- col-xs-3 begin -->

										<i class="fa fa-tasks fa-5x"></i>

									</div><!-- col-xs-3 finish -->

									<div class="col-xs-9 text-right">
										<!-- col-xs-9 text-right begin -->
										<div class="huge"> 8 </div>

										<div> Vagas </div>

									</div><!-- col-xs-9 text-right finish -->

								</div><!-- panel-heading row finish -->
							</div><!-- panel-heading finish -->

							<a href="index.php?view_products">
								<!-- a href begin -->
								<div class="panel-footer">
									<!-- panel-footer begin -->

									<span class="pull-left">
										<!-- pull-left begin -->
										Ver detalhes
									</span><!-- pull-left finish -->

									<span class="pull-right">
										<!-- pull-right begin -->
										<i class="fa fa-arrow-circle-right"></i>
									</span><!-- pull-right finish -->

									<div class="clearfix"></div>

								</div><!-- panel-footer finish -->
							</a><!-- a href finish -->

						</div><!-- panel panel-primary finish -->
					</div><!-- col-lg-3 col-md-6 finish -->

					<div class="col-lg-3 col-md-6">
						<!-- col-lg-3 col-md-6 begin -->
						<div class="panel panel-green">
							<!-- panel panel-green begin -->

							<div class="panel-heading box">
								<!-- panel-heading begin -->
								<div class="row">
									<!-- panel-heading row begin -->
									<div class="col-xs-3">
										<!-- col-xs-3 begin -->

										<i class="fa fa-users fa-5x"></i>

									</div><!-- col-xs-3 finish -->

									<div class="col-xs-9 text-right">
										<!-- col-xs-9 text-right begin -->
										<div class="huge"> <?php echo $contaprete;?></div>

										<div> Candidatos </div>

									</div><!-- col-xs-9 text-right finish -->

								</div><!-- panel-heading row finish -->
							</div><!-- panel-heading finish -->

							<a href="index.php?view_customers">
								<!-- a href begin -->
								<div class="panel-footer">
									<!-- panel-footer begin -->

									<span class="pull-left">
										<!-- pull-left begin -->
										Ver detalhes
									</span><!-- pull-left finish -->

									<span class="pull-right">
										<!-- pull-right begin -->
										<i class="fa fa-arrow-circle-right"></i>
									</span><!-- pull-right finish -->

									<div class="clearfix"></div>

								</div><!-- panel-footer finish -->
							</a><!-- a href finish -->

						</div><!-- panel panel-green finish -->
					</div><!-- col-lg-3 col-md-6 finish -->

					<div class="col-lg-3 col-md-6">
						<!-- col-lg-3 col-md-6 begin -->
						<div class="panel panel-orange">
							<!-- panel panel-yellow begin -->

							<div class="panel-heading box">
								<!-- panel-heading begin -->
								<div class="row">
									<!-- panel-heading row begin -->
									<div class="col-xs-3">
										<!-- col-xs-3 begin -->

										<i class="fa fa-tags fa-5x"></i>

									</div><!-- col-xs-3 finish -->

									<div class="col-xs-9 text-rig">
										<!-- col-xs-9 text-right begin -->
										<div class="huge"> <?php echo $contavaga;?> </div>

										<div> Vagas Categorias </div>

									</div><!-- col-xs-9 text-right finish -->

								</div><!-- panel-heading row finish -->
							</div><!-- panel-heading finish -->

							<a href="index.php?view_p_cats">
								<!-- a href begin -->
								<div class="panel-footer">
									<!-- panel-footer begin -->

									<span class="pull-left">
										<!-- pull-left begin -->
										Ver detalhes
									</span><!-- pull-left finish -->

									<span class="pull-right">
										<!-- pull-right begin -->
										<i class="fa fa-arrow-circle-right"></i>
									</span><!-- pull-right finish -->

									<div class="clearfix"></div>

								</div><!-- panel-footer finish -->
							</a><!-- a href finish -->

						</div><!-- panel panel-yellow finish -->
					</div><!-- col-lg-3 col-md-6 finish -->

					<div class="col-lg-3 col-md-6">
						<!-- col-lg-3 col-md-6 begin -->
						<div class="panel panel-red">
							<!-- panel panel-red begin -->
							<div class="panel-heading box">
								<!-- panel-heading begin -->
								<div class="row">
									<!-- panel-heading row begin -->
									<div class="col-xs-3">
										<!-- col-xs-3 begin -->

										<i class="fa fa-shopping-cart fa-5x"></i>

									</div><!-- col-xs-3 finish -->

									<div class="col-xs-9 text-right">
										<!-- col-xs-9 text-right begin -->
										<div class="huge"> 2 </div>

										<div> Pedidos </div>

									</div><!-- col-xs-9 text-right finish -->

								</div><!-- panel-heading row finish -->
							</div><!-- panel-heading finish -->

							<a href="index.php?view_orders">
								<!-- a href begin -->
								<div class="panel-footer">
									<!-- panel-footer begin -->

									<span class="pull-left">
										<!-- pull-left begin -->
										Ver detalhes
									</span><!-- pull-left finish -->

									<span class="pull-right">
										<!-- pull-right begin -->
										<i class="fa fa-arrow-circle-right"></i>
									</span><!-- pull-right finish -->

									<div class="clearfix"></div>

								</div><!-- panel-footer finish -->
							</a><!-- a href finish -->

						</div><!-- panel panel-red finish -->
					</div><!-- col-lg-3 col-md-6 finish -->

				</div><!-- row no: 2 finish -->
				<hr>
				<div class="row mb-3 rounded">
					<!-- row no: 3 begin -->
					<div class="col-lg-8">
						<!-- col-lg-8 begin -->
						<div class="panel panel-primary">
							<!-- panel panel-primary begin -->
							<div class="panel-heading">
								<!-- panel-heading begin -->
								<h3 class="panel-title">
									<!-- panel-title begin -->

									<i class="fa fa-money fa-fw"></i> Novo Candidato

								</h3><!-- panel-title finish -->
							</div><!-- panel-heading finish -->

							<div class="panel-body mx-1 box">
								<!-- panel-body begin -->
								<div class="table-responsive">
									<!-- table-responsive begin -->
									<table class="table table-hover table-striped table-bordered">
										<!-- table table-hover table-striped table-bordered begin -->

										<thead>
											<!-- thead begin -->

											<tr>
												<!-- th begin -->

												<th> Candidato no: </th>
												<th> Candidato Email: </th>
												<th> Solicitação No: </th>
												<th> Vaga ID: </th>
												<th> Vaga Data: </th>
												<th> Vaga Qtd: </th>
												<th> Status: </th>

											</tr><!-- th finish -->

										</thead><!-- thead finish -->

										<tbody>
											<!-- tbody begin -->

											<tr>
												<!-- tr begin -->

												<td> 22 </td>
												<td>

													bhififdbvybu@outlook.com
												</td>
												<td> 1151544873 </td>
												<td> 24 </td>
												<td> 1 </td>
												<td> </td>
												<td>

													pendente
												</td>

											</tr><!-- tr finish -->

											<tr>
												<!-- tr begin -->

												<td> 21 </td>
												<td>

													star@senac.com.br
												</td>
												<td> 435861195 </td>
												<td> 18 </td>
												<td> 1 </td>
												<td> 1 </td>
												<td>

													Completo
												</td>

											</tr><!-- tr finish -->

										</tbody><!-- tbody finish -->

									</table><!-- table table-hover table-striped table-bordered finish -->
								</div><!-- table-responsive finish -->

								<div class="text-right">
									<!-- text-right begin -->

									<a href="index.php?listar-pretedente">
										<!-- a href begin -->

										Ver Todos candidatos <i class="fa fa-arrow-circle-right"></i>

									</a><!-- a href finish -->

								</div><!-- text-right finish -->

							</div><!-- panel-body finish -->

						</div><!-- panel panel-primary finish -->
					</div><!-- col-lg-8 finish -->

					<div class="col-md-4 mx-auto box">
						<!-- col-md-4 begin -->
						<div class="panel">
							<!-- panel begin -->
							<div class="panel-body">
								<!-- panel-body begin -->
								<div class="mb-md thumb-info">
									<!-- mb-md thumb-info begin -->

									<img class="rounded mx-auto d-block" src="../uploads/<?=$dados['Img']?>"
										style="width: 200px;">

									<div class="thumb-info-title">
										<!-- thumb-info-title begin -->

										<span class="thumb-info-inner"> <?=$dados['nome']?> </span>
										<span class="thumb-info-type">Cadastro como<br><?=$dados['tipo']?> </span>

									</div><!-- thumb-info-title finish -->

								</div><!-- mb-md thumb-info finish -->

								<div class="mb-md">
									<!-- mb-md begin -->
									<div class="widget-content-expanded">
										<!-- widget-content-expanded begin -->
										<i class="fa fa-user"></i> <span> Email: </span> <?=$dados['email']?> <br>
										<i class="fa fa-flag"></i> <span> Cidade: </span> brasil <br>
										<i class="fa fa-envelope"></i> <span> Contato: </span> 11965782876 <br>
									</div><!-- widget-content-expanded finish -->

									<hr class="dotted short">

									<h5 class="text-muted"> Sobre </h5>

									<p>
										<!-- p begin -->

										mais bonito
									</p><!-- p finish -->

								</div><!-- mb-md finish -->

							</div><!-- panel-body finish -->
						</div><!-- panel finish -->
					</div><!-- col-md-4 finish -->

				</div><!-- row no: 3 finish -->

			</div><!-- container-fluid finish -->
		</div>
	</section>