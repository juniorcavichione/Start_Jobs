<?php include_once('./includes/cabecalho.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './phpMailer/Exception.php';
require './phpMailer/PHPMailer.php';
require './phpMailer/SMTP.php';

if (isset($_POST['enviar'])) {

	$nomeCompleto = $_POST['nome'];
	$emailUser = $_POST['email'];
	$contatoNumero = $_POST['contato'];
	$assuntoUser = $_POST['mensagem'];


	$mail = new PHPMailer(true);
	$mail->CharSet = "UTF-8";

	try {
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.mailtrap.io';                  //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = '479c15c149b717';                     //SMTP username
		$mail->Password   = '21fc016e98cdb0';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
		$mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('contato@startjobs.com.br', 'Pagina Contato');
		$mail->addAddress($emailUser, $nomeCompleto);   //Add a recipient




		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Formulario Contato';
		$mail->Body    = '<p>Prezado(adm) o cliente ' . $nomeCompleto . '<br> Entrou em contato conosco na pagina contato Favor responder</p>
			<br>Nome:' . $nomeCompleto . '<br>
			<br>Email:' . $emailUser . '<br>
			<br>Numero Telefone:' . $contatoNumero . '<br>
			<br>Assunto:' . $assuntoUser . '<br> <hr>
			Se você não não responder está mensagem o usuario pode estar com dificuldade.<hr><br>';
		$mail->AltBody = 'Se você não não responder está mensagem o cliente pode nao comprar a peça';


		$mail->send();
		$sucesso = "Enviado com sucesso muito obrigado por informar seu contato.";
		$sucesso;
		//echo "<script>alert('Aqui foi ')</script>";
	} catch (Exception $e) {
		echo "Mensagem não enviada Verifique os dados: {$mail->ErrorInfo}";
	}
}
?>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<?php include "includes/header.php" ?>
				<!-- Content -->
				<section>
					<header class="main">
						<h1>Entre em contato</h1>
					</header>
					<!-- Content -->
					<?php if (isset($sucesso)) { ?>
						<p class="alert alert-success">
							<?= $sucesso ?>
						</p>
					<?php } ?>
					<h2 id="content">Descreva o motivo do contato</h2>
					<form method="post" action="#">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall">
								<input type="text" name="nome" id="demo-name" value="" placeholder="Nome completo"/>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="email" name="email" id="demo-email" value="" placeholder="Email" />
							</div>
							<!-- Break -->
							<div class="col-12">
								<input type="text" name="contato" id="" value="" placeholder="Telefone" />
							</div>
							<!-- Break -->
							<div class="col-12">
								<textarea name="mensagem" id="demo-message" placeholder="Escreva sua mensagem" rows="6"></textarea>
							</div>
							<!-- Break -->
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Enviar mensagem" name="enviar" class="primary" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>

			</div>
		</div>
		<?php include_once('./includes/sidebar.php'); ?>
	</div>
	<?php include_once('./includes/footer.php'); ?>