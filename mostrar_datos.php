<?php
// Start the session
session_start();
?>
<?php include("configuracion.php");?>
<?php
 /* var_dump($_POST);
 echo "usuario:".$contenido["login"]["email"];
 echo "<br>clave:".$contenido["login"]["clave"];  */
 if (isset($_POST["email"])){
     if ( ($_POST["email"]===$contenido["user"]["email"]) && ($_POST["clave"]===$contenido["user"]["clave"])){
         echo "Bienvenido";
         
         header('location: indexlog.php');
         die();
         $_SESSION["email"] = $contenido["user"]["email"];
     }else{
        echo "<script>";
        echo "alert('Usuario invalido');";
        echo "window.history.go(-1)";
        echo "</script>";

        die();
     }
 }else{
     echo "No esta en el sistema en este momento";
 }
?>