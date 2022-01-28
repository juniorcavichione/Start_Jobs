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
						<li><a href="login.html" id="login" class="button big">Login</a></li>
					</ul>
				</header>

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