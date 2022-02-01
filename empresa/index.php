<?php include_once('./includes/cabecalho.php');
 
if(isset($_GET['exit'])){
	$sessao->logout();
  }
  ?>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div class="container">
			<div class="inner">
				<!-- Header -->
				<?php include "includes/header.php"?>
				<!-- NAVEGAÇÃO POR GET  -->
				<?php 
				if(isset($_GET['minha-conta'])){
					include("minha-conta.php");
				} 
				if(isset($_GET['editar-conta'])){
					include("editar-conta.php");
				}
				if(isset($_GET['minha-vaga'])){
					include("listar-vaga.php");
				} 
				if(isset($_GET['excluir-conta'])){
					include("excluir-conta.php");
				}
				if(isset($_GET['inserir-vaga'])){
					include("inserir-vaga.php");
				}
				if(isset($_GET['listar-pretedente'])){
					include("listar-pretendente.php");
				}
				if(isset($_GET['editar-vaga'])){
					include("editar-vaga.php");
				}	if(isset($_GET['detalhe-candidato'])){
					include("detalhe-candidato.php");
				}						
				?>			
			</div>
		</div>
		<?php include_once('./includes/sidebar.php');?>
	</div>

	<?php include_once('./includes/footer.php');?>