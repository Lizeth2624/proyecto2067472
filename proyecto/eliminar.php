<?php
require 'conexion.php';
$id= $mysqli-real_escape_string ($_GET['id']);



$sql = "UPDATE Personas SET activo=0 where id=$id";
echo $sql;
$resultado =$mysqli->query($sql);

if ($resultado>0){
	echo 'Registro Agregado';
}
else {
 
 echo 'Eror al Agregar registro';
}


?>