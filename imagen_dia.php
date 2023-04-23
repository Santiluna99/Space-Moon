<?php include("lector_imagen_dia.php");
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Space Moon</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/fresco.css"/>
	<link rel="stylesheet" href="css/slick.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md-3 order-2 order-sm-1">
					<div class="header__social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
					<a href="./index.php" class="site-logo">
						<h1>Space Moon</h1>
						
					</a>
				</div>
				<div class="col-sm-4 col-md-3 order-3 order-sm-3">
					<div class="header__switches">
						
						<!-- <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a> -->
						
						<!-- <ul class="">
							<li class=""><a href="salir.php">Cerrar Sesion</a></li>
						</ul>--> 
						<?php
                if(empty($_SESSION['nombre'])){
                    echo "<a class='nav-link' href='login.php'><i class='fa fa-user'></i> Iniciar Sesión </a>";
                }else{
                    echo "<a class='nav-link' href='session1.php'><i class='fa fa-user'></i> Mi cuenta </a>";
                }?>

					</div> 
					</div>
				</div>
			</div>
			<nav class="main__menu">
			<?php include ("./components/nav.php")?>
			</nav>
		</div>
	</header>
	<!-- Header Section end -->
	
	<!-- Hero Section -->
	<section class="hero__section">

	<div class="hero-slider">
        <div class='slide-item'>
		<?php echo 
	"
	<a class='fresco' href='img/hero-slider/".$contenido["imagen"]["titulo"]."/".$contenido["imagen"]["url"]."' data-fresco-group='projects'>
        <img src='img/hero-slider/".$contenido["imagen"]["titulo"]."/".$contenido["imagen"]["url"]."'".">
    </a>
	"
	?>
	
		
    <div class='hero-text-slider'>
<div class='text-item'>
<h2><?php echo $contenido["imagen"]['texto']?></h2>
<p><?php echo $contenido["imagen"]['titulo']?></p>
</div>
</div>
</div>
		</div>
	</section>
	<!-- Hero Section end -->
	
	<!-- Footer Section -->
	<footer class="footer__section">
		<div class="container">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>
	</footer>
	<!-- Footer Section end -->

	<!-- Search Begin -->

	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

