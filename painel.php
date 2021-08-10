<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>IEAD - Assembléia de Deus </title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cssss/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="cssss/animate.css">
    
    <link rel="stylesheet" href="cssss/owl.carousel.min.css">
    <link rel="stylesheet" href="cssss/owl.theme.default.min.css">
    <link rel="stylesheet" href="cssss/magnific-popup.css">

    <link rel="stylesheet" href="cssss/aos.css">

    <link rel="stylesheet" href="cssss/ionicons.min.css">
    
    <link rel="stylesheet" href="cssss/flaticon.css">
    <link rel="stylesheet" href="cssss/icomoon.css">
    <link rel="stylesheet" href="cssss/style.css">
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "502e8d6a-365c-41e0-897b-5e3c2e9d8ba1",
      safari_web_id: "",
      notifyButton: {
        enable: true,
      },
      subdomainName: "depad-unaux",
    });
  });
</script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
				<!-- <span class="flaticon-bible"> -->
	    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" style="width: 50px; height: 50px;"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
			  <li class="nav-item"><a href="sobre.php" class="nav-link"><span>Sobre</span></a></li>
			  <li class="nav-item"><a href="servico.php" class="nav-link"><span>Serviços</span></a></li>
	          <li class="nav-item"><a href="contato.php" class="nav-link"><span>Contato</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <section>		
      <div class="slider-item js-fullheight" style="background-image:url(evento/img/banner/hero-banner.png);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="container text-center">
					<img src="images/logo.png" style="width: 200px; height: 200px;">
					
					<h3 class="text-white text-center"> <br> IADEP <br> Igreja Evangelica Assembléia de Deus de Prado-BA</BR> </h3> <br>					
				    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h3> <b>SEU IP : <?php echo $_SERVER['REMOTE_ADDR'];?></b></h3></b>
<button class="button is-black"> <a href="logout.php">Sair</a></button>
					<a type="button" class="button button-header" href="evento/depad.php">Eventos && JOB - DEPAD</a>
				</div>	
				</div>
	        </div>     
        </div> 
	  </div>
	  
	</section>
	
	<section class="ftco-counter" id="section-counter">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
			  <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-5">
				  <div class="text">
					  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-users"></span>
					  </div>
					  
					<strong class="number" data-number="500">0</strong>
					<span>Membros</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-5">
				  <div class="text">
					  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-user"></span>
					  </div>
					<strong class="number" data-number="5">0</strong>
					<span>Pastores</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-5">
				  <div class="text">
					  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-money"></span>
					  </div>
					<strong class="number" data-number="1000">0</strong>
					<span>Ajudas por Ano</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center py-5">
				  <div class="text">
					  <div class="icon d-flex justify-content-center align-items-center">
						  <span class="icon-home"></span>
					  </div>
					<strong class="number" data-number="10">0</strong>
					<span>Igrejas</span>
				  </div>
				</div>
			  </div>
			</div> <br>
			<div class="text-center">
				<a type="button" class="button button-header" style="background-color: #3B1D82;" href="sobre.html">Conheça mais Sobre Nós</a>
			</div>
			
			</div> <br> 
		</section>
			

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>
