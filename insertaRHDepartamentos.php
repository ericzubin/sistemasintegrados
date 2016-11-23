<?php

$idDepartamento=$_POST['idDepartamento'];
$Nombre=$_POST['Nombre'];
$Localizacion=$_POST['Localizacion'];
$Status=$_POST['Status'];
include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhdepartamentos VALUES ('', '$Nombre','$Localizacion','$Status')";
echo $Query;
Ejecutar($Query,$Con);


Desconectar($Con);
?>