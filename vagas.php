<?php include_once('./includes/cabecalho.php')?>
<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
			<?php include "includes/header.php"?>
				<!-- Content -->
				<section>
					<header class="main">
						
						<!-- Botão de pesquisar vagas -->
						<div class="jumbotron my-4 shadow text-center">
            <h1 class="display-4">ENCONTRE SUA VAGA AQUI!</h1>

            <!-- Campo de pesquisa -->
				 <p class="lead">Consultar</p>

            <!-- autocomplete off desliga o historico -->
            <form autocomplete="off" action="resultados.php" method="get" class="form-inline justify-content-center">
				
                <input placeholder="Pesquise aqui" type="search" name="busca" id="busca" class="form-control mr-2">

                <button class="btn btn-primary" type="submit" >OK</button>
            </form>


					</header>
				</section>
			</div>
		</div>
		<?php include_once('./includes/sidebar.php');?>
	</div>
	<?php include_once('./includes/footer.php');?>