<?php
// Conectando a servidor de base de datos
$servidorBD = "localhost";
$usuarioBD = "usuario1";
$passBD= "mipass1";
$nombreBD = "mibd";

//$conexionBD = mysql_connect($servidorBD, $usuarioBD, $passBD);
$conexionBD = mysql_connect($servidorBD, $usuarioBD, $passBD) or die('No se pudo conectar: ' . mysql_error());

// Seleccionando base de datos
$seleccionBD = mysql_select_db($nombreBD) or die('No se pudo seleccionar la base de datos'. mysql_error());

?>