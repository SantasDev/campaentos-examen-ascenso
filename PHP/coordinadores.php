<?php
/*
 * coordinadores.php
 * 
 * Copyright 2018 Cristian <cristian@cristian-PC>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

	session_start();
	include("basededatos.php");
	$conexiondb=conectar_db();
	$checkMysql=(mysqli_ping($conexiondb));
	mb_internal_encoding('UTF-8');


?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>coordinadores</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.32" />
	<link rel="stylesheet" href="../CSS/IndexStyle.css">
</head>

<body>
	<header id="CabeceraIndex"> 
		<img src="../imagenes/logos/fusion.png"/>
		<div>
			<h1> Campamentos Jueveniles </h1>
			<h2> Examen de ascenso Semilla</h2>
		</div>
		<img src="../imagenes/logos/Deporte.png"/> 
	</header>
	
		<ul class="NavegadorIndex">
			<li> <a href="../PHP/nuevoIndex.php">Inicio</a></li>
			<li class="Accion"><a href="../PHP/nuevoIndex.php">Rangos de ascenso</a>
				<div class="mostrar">
					<a href="../Semilla.html"> Semilla</a>
					<a href="../Raiz.html"> Raiz</a>
					<a href="../Tallo.html"> Tallo</a>
					<a href="../index.html"> Hoja</a>
					<a href="../index.html"> Flor</a>
					<a href="../index.html"> Fruto</a>
				</div>
			</li>
			<li><a  class="Actual" href="../PHP/coordinadores.php">Coordinadores</a></li>
			<li class="Accion"> <a href="../descargas/">Descargas </a>
				<div class="mostrar">
					<a href="../descargas/CartillaAzul.pdf" download> Cartilla de liderazgo y crecimiento personal</a>
					<a href="../descargas/CartillaRoja.pdf" download> Cartilla de tecnicas campamentiles</a>
				</div>
			</li>
		
			<?php
			if ($checkMysql)
				echo "<span style=\"border-radius:10px;background-color:green; color:black;\">M</span>";
			else
				echo "<span style=\"border-radius:10px;background-color:red;color:black;\">M</span>";
			?>
		</ul>					
		
	<div id="container">
		
		<section id="SectionIndex">
			 
				<?php					
				$resultado = mysqli_query($conexiondb,"SELECT * FROM Campistas");

				while($consulta=mysqli_fetch_array($resultado)){
					$nombre=$consulta["Nombre"];
					$rango=$consulta["Rango"];
					$sangre=$consulta["Sangre"];
					$municipio=utf8_decode($consulta["Municipio"]);
					$foto=$consulta["Foto"];
				 
					echo "<section id=\"SectionCoordinadores\">";
					echo "<img src=\"../imagenes/Fotos/$foto.png\" alt=\"foto campista\"/>";
					echo "<div id=\"TextoCoordinador\">";
					echo "<div id=\"NombreCoordinador\"> Nombre: $nombre</div>
						<div id=\"RangoCoordinador\"> Rango: $rango</div>
						<div> Sangre: $sangre</div>
						<div id=\"BosqueCoordinador\">Bosque: Arrieros</div>
						<div id=\"MunicipioCoordinador\">Municipio: $municipio</div>
						<div id=\"Intereses\">Interesas: varios</div>
					</div>
					</section>";
					
					
				}	
				mysqli_close($conexiondb);
				?>
				
		</section>
	
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
