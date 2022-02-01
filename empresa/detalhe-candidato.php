<?php 
require_once "../src/Vaga.php";
require_once "../src/Usuario.php";
$usuario = new Usuario;
$vaga = new Vaga;

$usuario->setId($_GET['id']);
$listaUser = $usuario->lerUmUsuario();



?>	
	<!-- Banner -->
	<section id="banner" class="container">
	    <div class="content">
	        <header>
	            <h1>Contrata Candidato</h1>
	            <p>Informações do candidato</p>
	        </header>		
			<div class="container py-3">
			<div class="row mb-2">
				<div class="col-md-6">
				<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
					<strong class="d-inline-block mb-2 text-primary"><?=$listaUser['nome']?></strong>
					<h3 class="mb-0"><?=$listaUser['nome']?></h3>
					<div class="mb-1 text-muted"><?=$listaUser['nome']?></div>
					<ul>
						<li><?=$listaUser['nome']?></li>
						<li><?=$listaUser['nome']?></li>
						<li><?=$listaUser['nome']?></li>
						<li><?=$listaUser['nome']?></li>
						<li><?=$listaUser['nome']?></li>
					</ul>
					<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="stretched-link">Continue reading</a>
					</div>
					<div class="col-auto d-none d-lg-block">
					<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

					</div>
				</div>
				</div>
				<div class="col-md-6">
				<div class="row g-0 rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
					<strong class="d-inline-block mb-2 text-success">Contato</strong>
					<h3 class="mb-0">Região</h3>
					<div class="mb-1 text-muted">
						<span class="pull-right">
							<i class="fa fa-map-marker"></i>
						</span>Endereço: <?=$listaUser['email']?>
					</div>
					<p class="mb-auto"><span class="pull-right">
					<i class="fa fa-envelope"></i>
						</span>Email:<?=$listaUser['email']?>
					</p>
					<p class="mb-auto"><span class="pull-right">
					<i class="fa fa-map-marker"></i>
						</span>Telefone<?=$listaUser['email']?>
					</p>
					<p class="mb-auto"><span class="pull-right">
					<i class="fa fa-map-marker"></i>
						</span>Telefone<?=$listaUser['email']?>
					</p>
					<div class="mt-3">
					<a href="index.php?contratar-candidato" class="button big">Contratar</a>
					</div>
					
					</div>
					<div class="col-auto d-none d-lg-block">
						
					<!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

					</div>
				</div>
				</div>
			</div>
			</div>
	    </div>
	</section>