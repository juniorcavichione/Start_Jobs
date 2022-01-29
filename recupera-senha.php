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
					<?php
require_once "src/Usuario.php";

$user = new Usuario;
$user->setEmail($_POST['customer_email']);
$listarUsr = $user->lerUsuarios();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

//detectar os parametros de url


?>
<div class="box py-2"><!-- box Begin -->
    
  <div class="box-header py-4"><!-- box-header Begin -->
      
      <center><!-- center Begin -->
          
          <h1> Redefina sua senha </h1>   
       

            <?php 
if(!empty($_POST['SendRecupSenha'])){


//var_dump($buscaUsr);
    $buscaUsr = $user->buscaUsuario();
    if($buscaUsr['customer_email'] == $_POST['customer_email']){

        $_SESSION['msg'] = "<p class'success'> Usuario encontrado</p>";

        $chave_recupera = password_hash($buscaUsr['customer_id'], PASSWORD_DEFAULT);
        //echo "$chave_recupera";
        $identifi = $buscaUsr['customer_id'];
        $user->setCustomerId($identifi);
        $user->setRecoreryPass($chave_recupera);
        $user->enviaCodigo();
        $executado = $user->enviaCodigo();

        if($user->enviaCodigo() == 0){
            $linkVerif = "http://localhost/brunositevendaspecas/atualiza_senha.php?chave=$chave_recupera";
            $_SESSION['msg'] = "<p class='success'> inserido no banco</p>";
            $mail = new PHPMailer(true);
            $mail->CharSet = "UTF-8";


            try {
                 //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.mailtrap.io';                  //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = '479c15c149b717';                     //SMTP username
                    $mail->Password   = '21fc016e98cdb0';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                    $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                     //Recipients
                    $mail->setFrom('contato@newsscenterpecaspremium.com.br', 'Recuperacao');
                    $mail->addAddress($buscaUsr['customer_email'], $buscaUsr['customer_name']);     //Add a recipient


                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperar senha';
                    $mail->Body    = '<p>Prezado(a)' .$buscaUsr['customer_name']. '<b> Voçê solicitou alteração de senha ?</b><hr><br>
                    para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole no endereço de seu navegador<hr><br>'.$linkVerif.'<br><br>
                    Se você não solicitou essa alteração, nenhuma acção é necessária. Sua senha permanecerá a mesma até que você ative este còdigo.<hr><br>';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


                    $mail->send();

            }
            catch(Exception $e) {
                echo "Mensagem não enviada Verifique os dados: {$mail->ErrorInfo}";
            }
            $_SESSION['msg'] = "<p class='alert alert-success'>Codigo de Redefinição enviado para o e-mail cadastrado</p>";

        // echo "http://localhost/brunositevendaspecas/atualiza_senha.php?chave=$chave_recupera";
        }else{
            $_SESSION['msg'] = "<p class='alert alert-warning'> Não inserio no banco</p>";
        }
        
        

    }else
    {
       $_SESSION['msg'] = "<p class='alert alert-danger'> Usuario não encontrado</p>";
    }






}

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}


?>
          
          <p class="text-muted"> sinta se a vontade para se cadastrar e ficar por dentro de todas nossas promoções e oportunidades! </p>
          
      </center><!-- center Finish -->
      
  </div><!-- box-header Finish -->
   
  <form method="POST" action=""><!-- form Begin -->
      
      <div class="form-group"><!-- form-group Begin -->
          
          <label> Email </label>
          
          <input name="customer_email" type="text" class="form-control" value="<?php if(isset($_POST['customer_email'])){ echo $_POST['customer_email'];} ?>" required>
          
      </div><!-- form-group Finish -->
      
       
      
      <div class="text-center"><!-- text-center Begin -->
          
          <button name="SendRecupSenha" value="Recuperar" class="btn btn-primary">
              
              <i class="fa fa-sign-in"></i> Recuperar
              
          </button>
          
      </div><!-- text-center Finish -->     
      
  </form><!-- form Finish -->   
  
    
</div><!-- box Finish -->
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