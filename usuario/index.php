<?php include_once('./includes/cabecalho.php');
 
if(isset($_GET['exit'])){
	$sessao->logout();
  }
  ?>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<?php include "includes/header.php"?>

				<!-- NAVEGAÇÃO POR GET  -->
				<?php 
				if(isset($_GET['minha-conta'])){
					include("minha-conta.php");
				} if(isset($_GET['editar-conta'])){
					include("editar-conta.php");
				}if(isset($_GET['minha-vaga'])){
					include("minha-vaga.php");
				} if(isset($_GET['excluir-conta'])){
					include("excluir-conta.php");
				}				
				?>			
			</div>
		</div>
		<?php include_once('./includes/sidebar.php');?>
	</div>
	<?php include_once('./includes/footer.php');?>