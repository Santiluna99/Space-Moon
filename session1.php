<?php 
include ("./sesion.php");
include("./config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel de control - PhishingDetected</title>
    
    <?php include("./components/head.php");?>
    
</head>
<body>

    <div id="wrapper">
<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="130" alt=""></a>
            <nav class="main__menu">
			<?php include ("./components/nav.php")?>
			</nav>
            <ul class="navbar-nav mr-2 mb-2 mt-2 text-center order-1 order-md-last">
                <li class="nav-item">                           
                <a class='nav-link' href='salir.php'><i class='fa fa-user'></i> Cerrar Sesión </a>            
                </li>
            </ul>
        </nav>
    </div>
</header>
</div>
        
<!-- Contenido --> 
<section class='section'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class='page-wrapper'>
                    <div class='custombox authorbox clearfix carga-post'>
                        <h4 class='small-title'>Agregar post al foro</h4>
                        <form class='form-floating'method="POST" action="./components/cargar-publicacion.php" enctype='multipart/form-data'>
                                <input type='text' class='form-control form-admin' placeholder='Ingrese el titulo del post'name="titulo">      
                                <div class="btn boton-admin form-admin">
                                    <label for="archivo">Elige la imagen para subir </label>
                                    <input type="file" class="" accept=".jpg,.jpeg,.png" multiple id="archivo" name="archivo">
                                </div>
                                <textarea class='form-control form-admin mensaje-post' placeholder='Ingresa tu mensaje' name="mensaje"></textarea>
                                <div>
                                    <button type='submit' class='btn boton-admin col-12'>Publicar post <i class='fa fa-envelope-open-o'></i></button>
                                </div>
                        </form>                              
                    </div>
<hr class='invis1'>





<hr class='invis'>


</section>
</body>
</html>