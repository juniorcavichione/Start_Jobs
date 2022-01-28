<!-- Header -->
<header id="header">
	<a href="index.php" class="logo"><strong>Start_<span style="color: #2c76ee">Jobs</span></strong></a>
	<ul class="icons">
		<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
		<li><a href="https://github.com/juniorcavichione/Start_Jobs" target="_blank" class="icon brands fa-github"><span class="label">Github</span></a></li>
		<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><?php if($_SESSION['tipo'] != ""){
			echo "<a href='entrar-registrar.php' id='login' class='button big'>Entrar / Registrar</a>";
			}else{
				echo "<a href='entrar-registrar.php' id='login' class='button big'>Sair / Registrar</a>";
			}?></li>

	</ul>
</header>