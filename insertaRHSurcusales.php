<?php
$idPuesto=$_POST['idSurcusal'];
$Nombre=$_POST['Nombre'];
$localizacion=$_POST['localizacion'];
$Status=$_POST['Status'];
$Telefono=$_POST['Telefono'];
$DomicilioFiscal=$_POST['DomicilioFiscal'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhsucursales VALUES ('', '$Nombre','$localizacion','$Status','$Telefono','$DomicilioFiscal')";
Ejecutar($Query,$Con);


Desconectar($Con);
?>