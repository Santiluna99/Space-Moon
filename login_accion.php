
<?php
// Start the session
session_start();
?>

<?php include("configuracion.php");?>


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
						
						<!-- <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a> -->
						
						<!-- <ul class="">
							<li class=""><a href="salir.php">Cerrar Sesion</a></li>
						</ul> -->
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
	<h3 style="color: green;"><?php  echo "Bienvenido  ".$contenido["login"]["nombre"];{
                    
                    
                    
				}; ?></h3> 
	<!-- Hero Section -->
    <?php
                var_dump($_POST);
                echo "usuario:".$contenido["login"]["usuario"];
                echo "<br>clave:".$contenido["login"]["clave"];

                if (isset($_POST["name"])){
                    if ( ($_POST["name"]===$contenido["login"]["usuario"]) && ($_POST["password"]===$contenido["login"]["clave"])){
                        echo "<h1> Usuario valido de sistema</h1>";
                        $_SESSION["usuario"] = $contenido["login"]["usuario"];
                    }else{
                        echo "<h1> Usuario no valido para el sistema</h1>";
                    }
                }else{
                    echo "No esta en el sistema en este momento";
                }
                ?>
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
				<a class="fresco" href="img/hero-slider/3.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/3.jpg" alt="">
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
				<a class="fresco" href="img/hero-slider/6.jpg" data-fresco-group="projects">
					<img src="img/hero-slider/6.jpg" alt="">
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
	<h2>Cargue aqui su imagen</h2>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
						<form class='form-floating'method="POST" action="cargar-publicacion.php" enctype='multipart/form-data'>
                                <input type='text' class='form-control form-admin' placeholder='Ingrese el titulo del post'name="titulo">      
                                <div class="btn boton-admin form-admin">
                                    <label for="archivo">Elige la imagen para subir </label>
                                    <input type="file" class="" accept=".jpg,.jpeg,.png" multiple id="archivo" name="archivo">
                                </div>
                                <textarea class='form-control form-admin mensaje-post' placeholder='Ingresa tu mensaje' name="mensaje"></textarea>
                                <div>
                                    <button type='submit' class='btn boton-admin col-12' style="background-color='blue'">Publicar post <i class='fa fa-envelope-open-o'></i></button>
                                </div>
                        </form>
                        </div>
						
					</div>
				</div>
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
	<!-- <div class="search-model">
		
		<div class="h-100 d-flex align-items-center justify-content-center">
			
			<div class="search-close-switch">+</div>
			
			<form class="search-model-form">
				<h2>Ingresar</h2>
				<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
					<form id="form" class="form" method="POST" action="mostrar_datos.php">
					
						<div class="row">
							
							<div class="col-6 mb-3">
								<input type="email" name="email" id="email" class="form-control" placeholder="Your Emai">
							</div>
							<div class="col-6 mb-3">
								<input type="password" name="password" id="password" class="form-control" placeholder="Your Password">
							</div>
							
						

							<div class="col-12" style="position: relative">
								<input type="submit" value="submit" class="btn btn-primary"style="background:rgb(8, 149, 237) ;">
							</div>
						</div>
						
					</form>
				</div>
			</form>
			
		</div>
	</div> -->
	<!-- Search End -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

