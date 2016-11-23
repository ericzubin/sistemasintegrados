<?php

$idEmpleado=$_POST['idEmpleado'];
$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$FechaNacimiento=$_POST['FechaNacimiento'];
$FechaContratacion=$_POST['FechaContratacion'];
$RFC=$_POST['RFC'];
$IMSS=$_POST['IMSS'];
$Correo=$_POST['Correo'];
$sexo=$_POST['sexo'];
$EstadoCivil=$_POST['EstadoCivil'];
$CURP=$_POST['CURP'];
$IdDepartamento=$_POST['IdDepartamento'];
$IdPuesto=$_POST['IdPuesto'];
$IdCuenta=$_POST['IdCuenta'];
$IdCompra=$_POST['IdCompra'];
$IdVenta=$_POST['IdVenta'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhempleados VALUES ('', '$Nombre','$Telefono','$Direccion','$FechaNacimiento','$FechaContratacion','$RFC','$IMSS','$Correo',
'$sexo','$EstadoCivil','$CURP','$IdDepartamento','$IdPuesto','$IdCuenta','$IdCompra','$IdVenta')";
echo $Query;
Ejecutar($Query,$Con);


Desconectar($Con);
?>