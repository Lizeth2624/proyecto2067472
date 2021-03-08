<?php
$mysqli=new mysqli("localhost","root","","proyecto");
if ($mysiqli=>connect_errno)
{
	echo "fallo al conectar a mysql:(".$mysqli->connect_errno.")" .
	$mysqli->connect_error;
}