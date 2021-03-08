<?php
require 'conexion.php';
$Codigo_Per= $mysqli-real_escape_string ($_POST['Codigo_Per']);
$Codigo_Rol= $mysqli-real_escape_string ($_POST['Codigo_Rol']);
$Codigo_Programa= $mysqli-real_escape_string ($_POST['Codigo_Programa']);
$Nombres= $mysqli-real_escape_string ($_POST['Nombres']);
$Apellidos= $mysqli-real_escape_string ($_POST['Apellidos']);
$Correo_Institucional = $mysqli-real_escape_string ($_POST['Correo_Institucional']);
$Telefono= $mysqli-real_escape_string ($_POST['Telefono']);
$Fecha_nacimiento = $mysqli-real_escape_string ($_POST['Fecha_Nacimiento']);


$sql = "insert into Personas(Codigo_Per ,Codigo_Rol,Codigo_Programa,Nombres,Apellidos,Correo_Institucional,activo) values ('$Codigo_Per','$Codigo_Rol','$Codigo_Programa','$Codigo_Programa'.'$Nombres','$Apellidos','$Correo_Institucional',1) ";
echo $sql;
$resultado =$mysqli->query($sql);

if ($resultado>0){
	echo 'Registro Agregado';
}
else {
 
 echo 'Eror al Agregar registro';
}


?>