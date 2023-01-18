<?php 
include ("./sesion.php");
include("./config.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Boto | Photography HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

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
					<a href="./index.html" class="site-logo">
						<img src="img/logo.png" alt="">
					</a>
				</div>
				<div class="col-sm-4 col-md-3 order-3 order-sm-3">
					<div class="header__switches">
						<a href="#" class="search-switch"><i class="fa fa-search"></i></a>
						<a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
					</div>
				</div>
			</div>
			<nav class="main__menu">
            <?php include ("./components/nav1.php")?>
			</nav>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- About Page -->
	<section class="about__page">
		<div class="container-fluid">
			<div class="row">
              <form action="./components/guardar-acercade.php" method="POST">
				<div class="col-lg-4">
					<div class="about__text">
						<h3 class="about__title">Sobre mi</h3>
						<div class="about__meta">
							<img src="img/profile.jpg" alt="">
							<div class="about__meta__info">
								<h5><input type="text" class="" name="nombre" value="<?php echo $contenido['acercade']['nombre']?>"></input></h5>
								<p>Desarrollador de Software</p>
							</div>
						</div>
						<p><input type="text" class="" name="titulo" value="<?php echo $contenido['acercade']['titulo']?>"></input></p>
						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="experience__text">
						<h3 class="about__title">Sobre la pagina</h3>
						<div class="experience__item">
							<h4><input type="text" class="" name="titulo1" value="<?php echo $contenido['acercade']['titulo1']?>"></input></h4>
							<p><input type="text" class="" name="descripcion" value="<?php echo $contenido['acercade']['descripcion']?>"></input></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="skills__text">
						<h3 class="about__title"><input type="text" class="" name="titulo2" value="<?php echo $contenido['acercade']['titulo2']?>"></input></h3>
						<p><input type="text" class="" name="descripcion2" value="<?php echo $contenido['acercade']['descripcion2']?>"></input></p>
					</div>
				</div>
                <button type="submit" class="site-btn">Guardar Cambios</button>
             </form>
			</div>
		</div>
	</section>
	<!-- About Page end -->

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
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
