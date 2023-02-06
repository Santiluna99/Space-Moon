			<header>
			<nav class="main__menu">
				<ul class="nav__menu">
					<li><a href="./index.php">Home</a></li>
					<li><a href="./about.php">About</a></li>
					<li><a href="./gallery.php">Gallery</a></li>
					<li><a href="./contact.php" >Contact</a></li>
					<li><a href="./imagen_dia.php" >Imagen del Dia</a></li>
					<?php
                if(empty($_SESSION['nombre'])){
                    echo "<li><a href='./login.php'>Log In</a></li>";
                }else{
                    echo "<li><a href='./salir.php'>Salir</a></li>";
                }?>
					
                    
				</ul>
			</nav>
			</header>
		
	