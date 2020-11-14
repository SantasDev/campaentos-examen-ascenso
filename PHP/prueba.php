<?php
/*
 * prueba.php
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
if(mysqli_ping($conexiondb))
	echo "funcioina";
else
	echo "no conecto";
	
$resultado = mysqli_query($conexiondb,"SELECT * FROM Campistas");

while($consulta=mysqli_fetch_array($resultado)){
	echo $consulta["Nombre"];
	echo $consulta["Rango"];
	echo "</br>";
	}

	
mysqli_close($conexiondb);
?>
