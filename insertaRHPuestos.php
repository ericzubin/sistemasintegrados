<?php

$idPuesto=$_POST['idPuesto'];
$Nombre=$_POST['Nombre'];
$Status=$_POST['Status'];
$Descripcion=$_POST['Descripcion'];
$Nivel=$_POST['Nivel'];
$PersonalRequerido=$_POST['PersonalRequerido'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhpuestos VALUES ('', '$Nombre','$Status','$Descripcion','$Nivel','$PersonalRequerido')";
Ejecutar($Query,$Con);


Desconectar($Con);
?>