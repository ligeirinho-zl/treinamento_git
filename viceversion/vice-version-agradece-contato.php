﻿ 
<?php

 
#
# Exemplo de envio de e-mail SMTP PHPMailer - www.secnet.com.br
#
# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");

# Inicia a classe PHPMailer
$mail = new PHPMailer();

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.viceversion.com.br"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'contato@viceversion.com.br'; # Usuário de e-mail
$mail->Password = 'Vic&Version2@19!'; // # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = "contato@viceversion.com.br"; # Seu e-mail
$mail->FromName = "Formulario de Contato"; // Seu nome

# Define os destinatário(s)
$mail->AddAddress('contato@viceversion.com.br', 'Vice Version'); # Os campos podem ser substituidos por variáveis
$mail->AddAddress('stefano@viceversion.com.br'); # Caso queira receber uma copia
#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

# Define os dados técnicos da Mensagem
$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
#$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

# Define a mensagem (Texto e Assunto)
$mail->Subject = "Formulario de Contato"; # Assunto da mensagem 
$mail->Body .= " Nome: ".$_POST['nome']."<br>"; // Texto da mensagem
$mail->Body .= " email: ".$_POST['teste']."<br>"; // Texto da mensagem
$mail->Body .= " Telefone: ".$_POST['telefone']."<br>"; // Texto da mensagem
$mail->Body .= " Assunto: ".$_POST['assunto']."<br>"; // Texto da mensagem
$mail->Body .= " Mensagem: ".nl2br($_POST['mensagem'])."<br>"; // Texto da mensagem
# Define os anexos (opcional)
#$mail->AddAttachment("c:/temp/documento.pdf", "documento.pdf"); # Insere um anexo

# Envia o e-mail
$enviado = $mail->Send();
 

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

# Exibe uma mensagem de resultado (opcional)
 
 
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vice Version Traduções</title>
	
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='./images/logo_vice.png' rel='icon' type='image/x-icon'/>

	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <meta name="description" content="A Vice Version preza pela excelência ao atender às exigências de seus parceiros.Para isso, contamos com uma equipe altamente experiente e capacitada que oferecerá as melhores soluções às suas necessidades."/>
	<meta name="keywords" content="traduções, traduções simples, traduções técnica, interpretação, revisão de textos, legendagem , transcrição, localização, locução, translate, vice-version, vice, version " />
	<meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">

    <meta itemprop="name" content="Vice Version Traduções"/>
            <meta itemprop="alternateName" content="Vice Version"/>
            <meta itemprop="description" content="A Vice Version preza pela excelência ao atender às exigências de seus parceiros.Para isso, contamos com uma equipe altamente experiente e capacitada que oferecerá as melhores soluções às suas necessidades."/>
	<meta name="keywords" content="traduções, traduções simples, traduções técnica, interpretação, revisão de textos, legendagem , transcrição, localização, locução, translate, vice-version, vice, versi"/>
            <meta itemprop='keywords' content='traduções, traduções simples, traduções técnica, interpretação, revisão de textos, legendagem , transcrição, localização, locução, translate, vice-version, vice, version'/>
            <link itemprop="url" rel="https://www.viceversion.com.br" href="https://www.viceversion.com.br/">
            

        <meta property="og:type" content="article" />
        <meta property="og:title" content="Vice Version - Traduções" />
        <meta property="og:description" content="Escritório especializado em tradução juramentada para cidadania italiana e serviços consulares junto aos Consulados Italianos de Curitiba e São Paulo." />
         
        <meta property="og:url" content="https://www.viceversion.com.br/" />
        <meta property="og:site_name" content="Vice Version" />
        <meta property="og:locale" content="pt_BR" />
                <meta property="fb:admins" content="Vice Version" />
        <meta property="article:author" content="https://www.facebook.com/Viceversion" />
        <meta property="article:publisher" content="https://www.facebook.com/ViceVersion" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
<!--Bloquear Copias -->
<SCRIPT LANGUAGE="JavaScript"> 
<!-- Disable 
function disableselect(e){ 
return false 
} 

function reEnable(){ 
return true 
} 

//if IE4+ 
document.onselectstart=new Function ("return false") 
document.oncontextmenu=new Function ("return false") 
//if NS6 
if (window.sidebar){ 
document.onmousedown=disableselect 
document.onclick=reEnable 
} 
//--> 
</script> 
	<!-- css files -->
	 
</head>

<body>
	<!-- banner -->
	<div class="banner-main">
		<div class="banner-2">
			
			<!--header-->
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
							 
						</div>
						<!--navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="quem-somos.php">Empresa</a></li>
								<li><a href="clientes.php">Clientes</a></li>
								 <li><a href="servicos.php">Serviços</a></li>
								<li><a href="contato.php" class="active">Contato</a></li>
							</ul>
						</div>
					</nav>
				</div>
				 
			<!--//header-->
	</div>
	</div>
	<!-- //banner -->	
<!-- contact -->
 <div class="banner_img">
		<img src="images/contato.jpg" alt="" />
	</div>

<!-- //contact -->
<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="col-md-5 footer-grids">
				<h3>RECEBA NOSSA NEWSLETTER</h3>
				<p>Preencha seu e-mail e receba as novidades</p>
				<form action="receba-as-novidades.php" method="post">
					<input type="email" name="teste" placeholder="E-mail" required="">
					<input type="submit" value="">
				</form> 
			</div>
			<div class="col-md-4 footer-grids">
				<h3>Sobre Nós</h3>
				<p>A Vice Version preza pela excelência ao atender às exigências de seus parceiros. Para isso, contamos com uma equipe altamente experiente e capacitada que oferecerá as melhores soluções às suas necessidades.</p>
			</div> 
			<div class="col-md-3 footer-grids"> 
				<h3>Contatos</h3>
				<p>Santo André - SP/Brasil<br>
				<span>Phone:(011)98986-0449</span>
				<span>Phone:(011)98987-3820</span>
				
				<span>E-mail: <a href="#">contato@viceversion.com.br</a></span>
				</p>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- footer -->
	<div class="copyright">
		<div class="container">
			<p>© 2019 | Desenvolvido pela <a href="#">Update Informática</a></p>
			<ul class="social-icons3">
				<li><a href="https://www.facebook.com/viceversion/" class="fa fa-facebook icon-border facebook" target="_blank"  > </a></li>
				<li><a href="#" class="fa fa-instagram icon-border twitter" target="_blank" > </a></li>
				 
			</ul>
		</div>
	</div>
	<!-- //footer -->
<!-- bootstrap-pop-up -->
					<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
										Vice Version
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								</div>
								<section>
									<div class="modal-body">
										<img src="images/g3.jpg" alt=" " class="img-responsive" />
										<p></p>
									</div>
								</section>
							</div>
						</div>
					</div>
					<!-- //bootstrap-pop-up -->
	<!-- js-scripts -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->
	<!--Start-slider-script-->
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<script src="js/responsiveslides.min.js"></script>
						
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

	<!-- smooth scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- //smooth scrolling -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!-- stats -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/counterup.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$('.counter').counterUp({
				delay: 100,
				time: 1000
			});
		});
	</script>
	<!-- stats -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- js-scripts -->
</body>

</html>