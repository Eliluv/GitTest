<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Menú</title>
    <link rel="stylesheet" type="text/css" href="estilomenu.css">
    <link rel="stylesheet" type="text/css" href="slide.css">
</head>
<body background="Imagenes/shattered.png">
	<header>
		<center>
		<nav>
			<a href="menu2.php">Inicio</a>
			<a href="mostrar.php">Clientes</a>
			<a href="mostrarcorte.php">Registro de Corte</a>
			<a href="MVV.html">Sobre Nosotros</a>
			<a href="#">Ayuda</a>
			<a href="cerrar.php">Salir</a>
			<!-- <ul>
				<li><a href="menu2.php">Inicio</a></li>
				<li><a href="clientes.html">Clientes</a>

				<div>
					<ul>
						<li class="titulo naranja"><a href="#">Clientes</a></li>
						<li><a href="">Agregar</a></li>
					</ul>
				</div>
				</li>

				<li><a href="#">Registro de Corte</a>
				<div>
					<ul>
						<li class="titulo naranja"><a href="">Registros</a></li>
						<li><a href="">Nuevo Registro</a></li>
					</ul>
				</div>
				</li>
				<li><a href="#">Acerca de</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="cerrar.php">Salir</a></li>
			</ul> -->
		</nav>
		</center>
	</header>
<br><br><br><br>
  <div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Imagenes/img1.jpg" width="1000px" height="600px">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Imagenes/img2.jpg" width="1000px" height="600px">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Imagenes/img3.jpg" width="1000px" height="600px">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex > slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
</script>

</body>
	<?php
		session_start();
		echo "<div id = midiv>Hola " . $_SESSION['name']. "</div>";

		function salir()
		{
			session_destroy();
		}
	?>
</html>