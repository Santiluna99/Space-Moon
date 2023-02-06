<?php include("lector-publicacion.php");
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
	
	<!-- Hero Section -->
	<!-- <section class="hero__section">
		<div class="hero-slider">
        <div class='slide-item'>
	
    <a class='fresco' href='img/hero-slider/".$publicacion[$section]["titulo"]."/".$publicacion[$section]["imagen"]."'"."' data-fresco-group='projects'>
        <img src='img/hero-slider/".$publicacion[$section]["titulo"]."/".$publicacion[$section]["imagen"]."'"." alt=''>
    </a> </section>-->
	<form class='form-floating' action="./components/guardar-imagen.php" method="POST" enctype='multipart/form-data'>
<div class='hero-text-slider'>
<div class='text-item'>
<div class="">
        <div class=''>
		<!-- <div class="btn boton-admin form-admin">
            <label for="imagendia">Elige la imagen para subir </label>
            <input type="file" class="" accept=".jpg,.jpeg,.png" multiple id="uploadedFile" name="archivo">
        </div> -->

		<img src="" alt=""value="<?php echo $contenido['imagen']['archivo']?>">
<h2><input type="text" class="col-12" name="titulo" value="<?php echo $contenido['imagen']['titulo']?>"></input></h2>
<p><input type="text" class="col-12" name="texto" value="<?php echo $contenido['imagen']['texto']?>"></input></p>
<button type="submit" class="site-btn">Guardar Cambios</button>
</div>
</div>
	
</div>

			
</div>
<!-- <h2>Edite aqui su imagen del dia</h2>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
						<form class='form-floating'method="POST" action="guardar-imagen.php" enctype='multipart/form-data'>
                                <input type='text' class='form-control form-admin' placeholder='Ingrese el titulo del post'name="titulo">      
                                <div class="btn boton-admin form-admin">
                                    <label for="archivo">Elige la imagen para subir </label>
                                    <input type="file" class="" accept=".jpg,.jpeg,.png" multiple id="uploadedFile" name="archivo">
                                </div>
                                <textarea class='form-control form-admin mensaje-post' placeholder='Ingresa tu mensaje' name="texto"></textarea>
                                <div>
                                    <button value='Subir' type='submit' class='btn boton-admin col-12' style="background-color='blue'" name="uploadBtn">Publicar post <i class='fa fa-envelope-open-o'></i></button>
                                </div>
                        </form>
                        </div>
						
					</div>
				</div> -->
	</form>
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

