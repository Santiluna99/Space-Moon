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
				<?php include ("./components/nav_2.php")?>
				</nav>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section -->
	<section class="hero__section">
	<div class="hero-slider">
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/sci-fi-nebula-green-planet-space-hd-wallpaper-preview.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/sci-fi-nebula-green-planet-space-hd-wallpaper-preview.jpg" alt="">
				</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/galaxy.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/galaxy.jpg" alt="">
					</a>
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/jameswebb.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/jameswebb.jpg" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/universe.png" data-fresco-group="projects">
					<img src="img/hero-slider/universe.png" alt="">
				</a>	
			</div>
			
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/UNIVERSO-DINAMICO.gif" data-fresco-group="projects">
					<img src="img/hero-slider/UNIVERSO-DINAMICO.gif" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/space-planet-nebula-stars-wallpaper-preview.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/space-planet-nebula-stars-wallpaper-preview.jpg" alt="">
				</a>	
			</div>
			<div class="single-post-media">
                        <img src="/img/<?php echo $publicacion["Publicacion santi"] ["imagen"] ?>" alt="" class="img-fluid">
                    </div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/james.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/james.jpg" alt="">
				</a>	
			</div>
			<div class="slide-item">
				<a class="fresco" href="img/hero-slider/7.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/7.jpg" alt="">
				</a>	
			</div>
		</div>
		<div class="hero-text-slider">
			<div class="text-item">
				<h2>Nature</h2>
				<p>Photography</p>
			</div>
			<div class="text-item">
				<h2>Red Heartbeat</h2>
				<p>Photography</p>
			</div>
			<div class="text-item">
				<h2>Blue Dreem</h2>
				<p>Photography</p>
			</div>
			<div class="text-item">
				<h2>Christian Church</h2>
				<p>Photography</p>
			</div>
			<div class="text-item">
				<h2>Red Darkness</h2>
				<p>Photography</p>
			</div>
			<div class="text-item">
				<h2>Beauty with Brain</h2>
				<p>Photography</p>
			</div>
			<div class="text-item">
				<h2>Remarkable</h2>
				<p>Photography</p>
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
	<div class="search-model">
		
		<div class="h-100 d-flex align-items-center justify-content-center">
			
			<div class="search-close-switch">+</div>
				<div class="container">
					<form id="form" class="form" method="POST" enctype='multipart/form-data' action="registrarusuario.php">
						<h2>Registrate en este formulario</h2>
						<br>
						<div class="form-control">
							<label for="nombre"></label>
							<input type="text" name="nombre" id="nombre" placeholder="Ingresa un nombre de usuario">
						</div>
						 <div class="form-control">
							<label for="imagen"></label>
							<input type="file" name="archivo" id="archivo">
						</div>
						<div class="form-control">
							<label for="email"></label>
							<input type="text" name="email" id="email" placeholder="ejemplo@gmail.com">
						</div>
						<div class="form-control">
							<label for="clave"></label>
							<input type="password" name="clave" id="clave" placeholder="Ingresa una clave">
						</div>
						<button>Enviar</button>
					</form>
				</div>
			
		</div>
	</div>
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
