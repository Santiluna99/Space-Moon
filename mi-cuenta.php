<?php 
session_start();
include("./config.php"); ?>

<!DOCTYPE html>
<html lang="es">
<body>

<?php include ("./components/nav.php")?>
    <div class="container">
       <p>
        <?php
        if (isset($_POST["nombre"])){
            if ( ($_POST["nombre"]===$contenido["user"]["nombre"]) && ($_POST["clave"]===$contenido["user"]["clave"])){
                echo "<h1> Sesión Iniciada</h1>";
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
                    <h2><i class="fa fa-star bg-orange"></i> 
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
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="indexlog.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="mi-cuenta.php">Mi cuenta</a></li>
                    </ol>
                </div><!-- end col -->                    
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->
        
<?php  if (isset($_POST["nombre"])){
                        if ( ($_POST["nombre"]===$contenido["user"]["nombre"]) && ($_POST["clave"]===$contenido["user"]["clave"])){
                        echo  "<div class='volver-login text-center'>
                        <a class='btn btn-primary boton-volver' href='./session1.php' role='button'>Ir al panel de usuario</a>
                        <a class='btn btn-primary boton-volver' href='./salir.php' role='button'>Cerrar sesión</a>
                     </div>";
                    }else{
                        echo "<h3> Inicio de sesión no valido</h3>";
                        }
        }else{
            echo "<div class='volver-login text-center'>
                    <a class='btn btn-primary boton-volver' href='./login.php' role='button'>Volver a iniciar sesión</a>
                 </div>";
            }; 
    ?> 
</body>
</html>