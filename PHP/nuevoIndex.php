<!--
   nuevoIndex.html
   
   Copyright 2018 Cristian <cristian@cristian-PC>
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
   
   
-->

<?php 
	session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Nuevo index</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.32" />
	<link rel="stylesheet" href="../CSS/IndexStyle.css">
</head>

<body>
	
	<header id="CabeceraIndex"> 
		<img src="../imagenes/logos/fusion.png"/>
		<div>
			<h1> Campamentos Jueveniles </h1>
			<h2> {nombre del campamento}</h2>
		</div>
		<img src="../imagenes/logos/Deporte.png"/> 
	</header>
	

		<ul class="NavegadorIndex">
			<li> <a  class="Actual" href="nuevoIndex.php">Inicio</a></li>
			<li class="Accion"><a href="#Rangos">Rangos de ascenso</a>
				<div class="mostrar">
					<a href="../Semilla.html"> Semilla</a>
					<a href="../Raiz.html"> Raiz</a>
					<a href="../Tallo.html"> Tallo</a>
					<a href="../index.html"> Hoja</a>
					<a href="../index.html"> Flor</a>
					<a href="../index.html"> Fruto</a>
				</div>
			</li>
			<li><a href="../PHP/coordinadores.php">Coordinadores</a></li>
			<li class="Accion"> <a href="../descargas/">Descargas </a>
				<div class="mostrar">
					<a href="../descargas/CartillaAzul.pdf" download> Cartilla de liderazgo y crecimiento personal</a>
					<a href="../descargas/CartillaRoja.pdf" download> Cartilla de tecnicas campamentiles</a>
				</div>
			</li>
		</ul>
		

	<div id="container">
	<Section id="SectionIndex"> 
		<article>
		Mensaje de bienvenida
		</article>
		
		<article>
			<h1> Arboles mayores</h1>
			<p> Te invitamos a conocer nuestros arboles mayores, simbolo
			de liderazgo y compromiso por el programa campamentos juveniles</p>
			<div id="arboles">
			<section id="SectionCoordinadores"> 
				<img src="../imagenes/logos/fusion.png" alt="foto campista"/>
				<div id="TextoCoordinador">
					<div id="NombreCoordinador"> Nombre: Juan Manuel Ocampo</div>
					<div id="RangoCoordinador"> Rango: flor</div>
					<div id="BosqueCoordinador">Bosque: Arrieros</div> 
					<div id="MunicipioCoordinador">Municipio: Villamaria</div>
					<div id="Intereses">Interesas: varios</div>
				</div>
			</section>
			<section id="SectionCoordinadores"> 
				<img src="../imagenes/logos/fusion.png" alt="foto campista"/>
				<div id="TextoCoordinador">
					<div id="NombreCoordinador"> Nombre: Juan Manuel Ocampo</div>
					<div id="RangoCoordinador"> Rango: flor</div>
					<div id="BosqueCoordinador">Bosque: Arrieros</div> 
					<div id="MunicipioCoordinador">Municipio: Villamaria</div>
					<div id="Intereses">Interesas: varios</div>
				</div>
			</section>
			<section id="SectionCoordinadores"> 
				<img src="../imagenes/logos/fusion.png" alt="foto campista"/>
				<div id="TextoCoordinador">
					<div id="NombreCoordinador"> Nombre: Juan Manuel Ocampo</div>
					<div id="RangoCoordinador"> Rango: flor</div>
					<div id="BosqueCoordinador">Bosque: Arrieros</div> 
					<div id="MunicipioCoordinador">Municipio: Villamaria</div>
					<div id="Intereses">Interesas: varios</div>
				</div>
			</section>
			</div>	
			
			Conoce a los cordinadores también en el siguiente enlace:
			
			<a href="../PHP/coordinadores.php">Ver los coordinadores.</a>
			
		</article>		
		<a name="Rangos"></a>
		<article>
		<h1> Bienvenido al Examen de asenso de campamentos Juveniles</h1>
	
		<p> Estamos muy agradecidos por formar parte de nuestro voluntariado
		y estás a solo un paso para ser recompensado por todo tu esfuerzo y 
		sacrificio; a continuación debes enfrentarte a un examén que te 
		enfrentará con tus conocimientos dentro del programa.</p>
		
		<p> Para continuar por favor selecciona el nivel de asenso al que 
		aspiras ascender:</p> 
		<div class="containerall">
		<div class="container">
		  <img src="../imagenes/Pines/semilla.svg" alt="semilla.svg" class="image" style="width:100%">
		  <div class="middle">
			<a class="text" href="../html/Semilla.html">Semilla</a>
		  </div>
			</div>
		  <div class="container">
		  <img src="../imagenes/Pines/raiz.svg" alt="Raiz.svg" class="image" style="width:100%">
		  <div class="middle">
			<a class="text" href="../html/Raiz.html">Raiz</a>
		  </div>
			</div>
		<div class="container">
		  <img src="../imagenes/Pines/tallo.svg" alt="Tallo.svg" class="image" style="width:100%">
		  <div class="middle">
			<a class="text" href="../html/Tallo.html">Tallo</a>
		  </div>
		</div>	
		<div class="container">
		  <img src="../imagenes/Pines/hoja.svg" alt="Hoja.svg" class="image" style="width:100%">
		  <div class="middle">
			<a class="text" href="../html/Hoja.html">Hoja</a>
		  </div>
		</div>
		<div class="container">
		  <img src="../imagenes/Pines/flor.svg" alt="Flor.svg" class="image" style="width:100%">
		  <div class="middle">
			<a class="text" href="../html/Flor.html">Flor</a>
		  </div>
		</div>
		<div class="container">
		  <img src="../imagenes/Pines/fruto.svg" alt="Fruto.svg" class="image" style="width:100%">
		  <div class="middle">
			<a class="text" href="../html/Fruto.html">Fruto</a>
		  </div>
		</div>				  
	</div>
	
	<h2> Les deseamos todos los éxitos en el examen</h2>
	</article>
	</Section>	

	<aside id="AsideIndex"> 
		<?php
		
		if(!isset($_SESSION['nombre'])){
		
		echo "<form method=\"post\" action=\"login.php\">
				<label for=\"usuario\" > Usuario: </label>
				<input id=\"user\" type=\"text\" name=\"usuario\"/>
				<label for=\"contrasena\"> Contraseña: </label>
				<input id=\"pwd\" type=\"password\" name=\"contrasena\"/>
				<input id=\"boton\" type=\"submit\" name=\"enviar\" value=\"Login\"/>	
				</br>
				<a href=\"nuevoCampista.html\"> Crear usuario</a>	
		</form>"; 
	}
		else{
			
			$nombre= $_SESSION['nombre'];
			$rango= $_SESSION['rango'];
			$municipio= $_SESSION['municipio'];
			$foto = $_SESSION['foto'];
			
			echo "<div id=\"SectionAside\">";
			echo "<img src=\"../imagenes/Fotos/$foto.png\" alt=\"foto campista\"/>";
			echo "<div id=\"TextoAside\">";
			echo "<div > Nombre: $nombre</div>
						<div> Rango: $rango</div>
						<div>Bosque: Arrieros</div>
						<div>Municipio: $municipio</div>";
			echo "</div>";
			echo "</div>";
			
			echo "<a href=\"EliminarSesion.php\"> Cerrar sesion</a>";
			echo "<a href=\"ModificarDatos.php\"> Modificar datos</a>";
			echo "<a href=\"Examenes/$rango.php\"> Presentar Examen</a>";
			
			}
		
		?>
	</aside>
	</div>	
	
	<footer id="FooterIndex"> FOOTER</footer>
	
</body>

</html>
