<?php

try 
{
	$conexion = new PDO('mysql:host=localhost;dbname=goa','root','');
}
catch (PDOException $ex) {
	echo "Sucedio un problema al realizar la conexión !!";
	exit;
}   

?>