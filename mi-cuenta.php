
<!--                                           -->
<?php 
session_start();
include("./config.php"); ?>
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
				<?php include ("./components/nav1.php")?>
				</nav>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section -->
    <div class="container">
       <p>
        <?php
        if (isset($_POST["nombre"])){
            if ( ($_POST["nombre"]===$contenido["user"]["nombre"]) && ($_POST["clave"]===$contenido["user"]["clave"])){
                echo "<h4> Sesión Iniciada</h4>";
                $_SESSION["nombre"] = $contenido["user"]["nombre"];
            }else{
                echo "<h1> nombre no valido para el sistema</h1>";
                header('location: login.php');
            }
        }else{
            echo "No esta en el sistema en este momento";
        }
        ?>
        </p>
        </div>
        <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class=""></i> 
                    <?php  if (isset($_POST["nombre"])){
                    if ( ($_POST["nombre"]===$contenido["user"]["nombre"]) && ($_POST["clave"]===$contenido["user"]["clave"])){
                    echo "Bienvenido:  ".$contenido["user"]["nombre"];
                    }else{
                    echo "<h3> Inicio de sesión no valido</h3>";
                    }
                    }else{
                        echo "No esta en el sistema en este momento";
                    }; ?> </h2>
                </div><!-- end col -->
                                  
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
	<!-- Hero Section end -->

	

	

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
