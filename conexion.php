<?php
//conexion con la base

$link=mysql_connect("localhost","root","")or die("<h2>No se encuentra el servicio<h2>");
$db=mysql_select_db("estudiante",$link)or die("<h2>Error de conexion<h2>");

//Datos de formulario

$nombre=$_post["Nombres"];
$apellidos=$_post["Apellidos"];
$edad=$_post["Edad"];
$fecha=$_post["Fecha de Nacimiento"];
$celulares=$_post["Ingrese sus celulares"];

//validacion de cada campo

$req=(strlen($nombre)*strlen($apellidos)*strlen($edad)*strlen($fecha)*strlen($celulares))or die("No se han llenado todos los campos")

//ingresamos la informacion en la base de datos

mysql_query("INSERT INTO estudiates VALUES("","$nombre","$apellidos","$edad","$fecha","$celulares")",$link)or die("<h2>Error de envio</h2>");
echo '
	<h2>Registro completado</h2>
?>