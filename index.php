<?php
include('bin/Sistema.php');

$consulta = new Consulta($conexion, "select * from tipo_incidencia");

echo $consulta->getColumna("codigo");
echo $consulta->getColumna("descripcion");

?>