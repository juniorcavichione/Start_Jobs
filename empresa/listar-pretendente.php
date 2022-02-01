	<?php 
	require_once "../src/Vaga.php";

	$vaga = new Vaga;
	$contaprete = $vaga->ContaInteresse();
	$vaga->setIdusuario($_SESSION['id']);
	$tabinter = $vaga->mostraInteressado();
	?>
	
	<!-- Banner -->
	<section id="banner">
		<div class="content">
			<header>
				<h1>Lista Pretedentes</h1>
				<p>Site responsível</p>
			</header>		
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

								<th> Id Vaga no: </th>
								<th> Usuario id: </th>
								<th> Solicitação No: </th>
								<th> Vaga ID: </th>
								<th> Vaga Data: </th>
								<th> Vaga Qtd: </th>
								<th> Status: </th>

							</tr><!-- th finish -->

						</thead><!-- thead finish -->

						<tbody>
							<!-- tbody begin -->

							<?php foreach($tabinter as $dadostb ){?>

								<tr onclick="window.location='index.php?detalhe-candidato&id=<?= $dadostb['id_usuario'] ?>'">
									<td> <?=$dadostb['id_interessados']?> </td>
									<td><?=$dadostb['id_usuario']?></td>
									<td> <?=$dadostb['id_vaga']?> </td>
									<td> <?=$dadostb['solicitacao']?></td>
									<td> <?=$dadostb['usuario_id']?> </td>
									<td> <?=$dadostb['usuario_id']?> </td>

									<td>pendente</td>
								</tr>
								<?php }?>

						</tbody><!-- tbody finish -->

					</table><!-- table table-hover table-striped table-bordered finish -->
				</div><!-- table-responsive finish -->
				<ul class="actions">
					<li><a href="index.php?minha-vaga" class="button big">Página de vagas</a></li>
				</ul>
			</div>
	</section>