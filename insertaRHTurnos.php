<?php
$idTurno=$_POST['idTurno'];
$Nombre=$_POST['Nombre'];
$HoraEntrada=$_POST['HoraEntrada'];
$HoraSalida=$_POST['HoraSalida'];
$DiasLaborales=$_POST['DiasLaborales'];
$TipoJornada=$_POST['TipoJornada'];
$Status=$_POST['Status'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhsucursales VALUES ('', '$Nombre','$HoraEntrada','$HoraSalida','$DiasLaborales','$TipoJornada','$Status')";
Ejecutar($Query,$Con);


Desconectar($Con);
?>