<?php include_once('./includes/cabecalho.php')?>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<?php include "includes/header.php"?>
				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header class="py-5 border-bottom">
							<div class="container pt-md-1 pb-md-4">
								<div class="row">
									<div class="col-xl-8">
										<h1 class="bd-title mt-0">Examples</h1>
										<p class="bd-lead">Quickly get a project started with any of our examples
											ranging from using parts of the framework to custom components and layouts.
										</p>

										<div class="d-flex flex-column flex-sm-row">
											<a href="https://github.com/twbs/bootstrap/releases/download/v5.0.2/bootstrap-5.0.2-examples.zip"
												class="btn btn-lg btn-bd-primary"
												onclick="ga('send', 'event', 'Examples', 'Hero', 'Download Examples');">Download
												examples</a>
											<a href="https://github.com/twbs/bootstrap/archive/v5.0.2.zip"
												class="btn btn-lg btn-outline-secondary mt-3 mt-sm-0 ms-sm-3"
												onclick="ga('send', 'event', 'Examples', 'Hero', 'Download');">Download
												source code</a>
										</div>

									</div>
									<div class="col-xl-4 d-lg-flex justify-content-xl-end">
										<script async=""
											src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&amp;placement=getbootstrapcom"
											id="_carbonads_js"></script>

									</div>
								</div>
							</div>
						</header>

						
						<p>Vamos te ajudar na busca do emprego desejado, temos vagas em diversos segmentos.</p>
						<p>Temos vagas de:</p>
						<ul>
							<li>Informática | TI</li>
							<li>Logística</li>
							<li>Administração</li>
							<li>Serviços</li>
							<li>Free Lancer</li>
						</ul>
						<ul class="actions">
							<li><a href="vagas.php" class="button big">Página de vagas</a></li>
						</ul>
					</div>
					<span class="image object">
						<!-- <img src="images/pic10.jpg" alt="" /> -->
					</span>
				</section>
				<hr>
				<!-- VAGAS  BACK-END -->
				<h2>Vagas</h2>
			</div>
		</div>
		<?php include_once('./includes/sidebar.php');?>
	</div>
	<?php include_once('./includes/footer.php');?>