<?php 
require_once "../src/Vaga.php";
require_once "../src/Usuario.php";
$usuario = new Usuario;
$vaga = new Vaga;
$usuario->setId($_GET['id']);
$listaUser = $usuario->lerUmUsuario();
$linkzap = 'https://wa.me/55'.$listaUser['telefone'].'?text=Eu%20Gostaria%20de%20saber%20sobre%20Disponibilidade';

if(isset($_POST['contratar'])){
	$vaga->setIdusuario($_GET['id']);
	$vaga->setNome($listaUser['nome']);
	$vaga->setEmail($listaUser['email']);
	$vaga->setEmpresaid($_SESSION['id']);
	$vaga->setWhatsapp($linkzap);
	$vaga->contratatoUser();
	echo "<script>alert('Voçe contratou com sucesso ;-)')</script>";
}
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
					<strong class="d-inline-block mb-2 text-primary">Detalhes candidato</strong>
					<h3 class="mb-0"><?=$listaUser['nome']?></h3>
					<div class="mb-1 text-muted"><?=$listaUser['habilidade']?></div>
					<ul>
						<li><?php echo $_GET['id'];?></li>
						<li><?=$listaUser['nome']?></li>						
					</ul>
					<div class="mb-1 text-muted"><?=$listaUser['sobre']?></div>
					</div>
					<div class="col-auto d-none d-lg-block">				
					<img src="../uploads/<?=$listaUser['Img']?>" alt="mdo" width="200" height="250" class="bd-placeholder-img">
					</div>
				</div>
				</div>
				<div class="col-md-6">
				<div class="row g-0 rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
					<strong class="d-inline-block mb-2 text-success">Contato</strong>
					<h3 class="mb-0">Região</h3>
					<div class="mb-1 mt-3 text-muted">
						<span class="pull-right">
							<i class="fa fa-map-marker"></i>
						</span>Cidade: <?=$listaUser['endereco']?>
					</div>
					<p class="mb-auto"><span class="pull-right">
					<i class="fa fa-envelope"></i>
						</span>Email: <?=$listaUser['email']?>
					</p>
					<p class="mb-auto"><span class="pull-right">
					<i class="fa fa-child"></i>
						</span>Sexo: <?=$listaUser['sexo']?>
					</p>
					<p class="mb-auto"><span class="pull-right">
					<i class="fa fa-phone"></i>
						</span>Telefone: <?=$listaUser['telefone']?>
					</p>			
					<div class="mt-3">
					<form action="" method="POST">	
					<input href="index.php?contratar-candidato" name="contratar" type="submit" value="Contratar" class="button big">
					</form>	
					</div>					
					</div>
					<div class="col-auto d-none d-lg-block">
					</div>
				</div>
				</div>
			</div>
			</div>
	    </div>
	</section>