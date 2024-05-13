<?php
$usuario="root";
$password="";
$servidor="localhost";
$basedatos="bdjhonatan";
$conexion=mysqli_connect($servidor,$usuario,$password) or die("No se ha podido conectar al servidor");
$db=mysqli_select_db($conexion,$basedatos)or die("No se ha podido conectar con la base de datos");
?>