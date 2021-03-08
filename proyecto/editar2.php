<?php
require 'conexion.php';

$id= $mysqli-real_escape_string ($_POST['id']);
$Codigo_Per= $mysqli-real_escape_string ($_POST['Codigo_Per']);
$Codigo_Rol= $mysqli-real_escape_string ($_POST['Codigo_Rol']);
$Codigo_Programa= $mysqli-real_escape_string ($_POST['Codigo_Programa']);
$Nombres= $mysqli-real_escape_string ($_POST['Nombres']);
$Apellidos= $mysqli-real_escape_string ($_POST['Apellidos']);
$Correo_Institucional = $mysqli-real_escape_string ($_POST['Correo_Institucional']);
$Telefono= $mysqli-real_escape_string ($_POST['Telefono']);
$Fecha_nacimiento = $mysqli-real_escape_string ($_POST['Fecha_Nacimiento']);

$sql = " UPDATE Personas SET Codigo_per='Codigo_per',Codigo_Rol='Codigo_Rol',Codigo_Programa='Codigo_Programa',Nombres='Nombres',Apellidos='Apellidos',Correo_Institucional='Correo_Institucional',Telefono='Telefono',Fecha_nacimiento='Fecha_Nacimiento'where id=$id";


echo $sql;
$resultado =$mysqli->query($sql);

if ($resultado>0){
  echo 'Registro Modificado';
}
else {
 
 echo 'Eror al Modificar registro';
}


?>