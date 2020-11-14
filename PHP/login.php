<?php
/*
 * login.php
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

	include("basededatos.php");
	$conexiondb=conectar_db();
	$checkMysql=(mysqli_ping($conexiondb));
	mb_internal_encoding('UTF-8');

$campista=$_POST['usuario'];
$pdwCampista=$_POST['contrasena'];

echo "Bienvenido $campista";

if($checkMysql){
	$resultado = mysqli_query($conexiondb,"SELECT * FROM Campistas WHERE Cedula=$campista");
	if($consulta=mysqli_fetch_array($resultado)){
		$nombre=utf8_decode($consulta["Nombre"]);
		$rango=utf8_decode($consulta["Rango"]);
		$municipio=utf8_decode($consulta["Municipio"]);
		$pwd=$consulta["Contrasena"];
		$PwdCampista=sha1($pdwCampista);
		$foto=$consulta["Foto"];
		
		if($pwd==$PwdCampista){
			session_start();
			
			$_SESSION['nombre']=$nombre;
			$_SESSION['rango']=$rango;
			$_SESSION['municipio']=$municipio;
			$_SESSION['foto']=$foto;
			
			header('Location:' . getenv('HTTP_REFERER'));
			
			}
		else{
			echo "Contraseña incorrecta";
			}
				
		
		}
	else{
		echo "no existe el campista";
		}
	
	
	
	}
	
else{
	echo "No se logro crear conexion con la base de datos";
	
	}






?>

