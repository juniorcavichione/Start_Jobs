<!-- Header -->
<header id="header">
	<a href="index.php" class="logo"><strong>Start_<span style="color: #2c76ee">Jobs</span></strong></a>
	<ul class="icons">
		<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
		<li><a href="https://github.com/juniorcavichione/Start_Jobs" target="_blank" class="icon brands fa-github"><span
					class="label">Github</span></a></li>
		<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<!-- <li>
			<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
				data-bs-toggle="dropdown" aria-expanded="false">
				<img src="./uploads/<?php echo $_SESSION['Img'];?>" alt="mdo" width="32" height="32" class="rounded-circle mt-3">
			</a>
			<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
				<li><a class="dropdown-item" href="<?php if($_SESSION['tipo'] == "empresa"){echo "./empresa/index.php?minha-conta";}else { echo "./usuario/index.php?minha-conta";} ?>">Minha Conta</a></li>
				<li><a class="dropdown-item" href="#">Perfil</a></li>
				<li><a class="dropdown-item" href="#">Excluir conta</a></li>
				<li>
					<hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="index.php?sair">Sair</a></li>
			</ul>
		</li> -->
		<?php if(!isset($_SESSION['tipo'])){
			echo "<a href='entrar-registrar.php' id='login' class='button big'>Entrar / Registrar</a>";
			}else{
			echo "<a href='?sair' id='login' class='button big'>Sair</a>";	
			}?></li>
		
	</ul>
	<!-- <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div> -->
</header>