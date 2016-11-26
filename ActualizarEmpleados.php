<?php
include('conectadb.php');

if ( array_key_exists("Actualizar", $_POST) ) {

$IdEmpleado=$_POST['IdEmpleado'];
$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$FechaNacimiento=$_POST['FechaNacimiento'];
$FechaContratacion=$_POST['FechaContratacion'];
$RFC=$_POST['RFC'];
$IMSS=$_POST['IMSS'];
$Correo=$_POST['Correo'];
$Sexo=$_POST['Sexo'];
$EstadoCivil=$_POST['EstadoCivil'];
$CURP=$_POST['CURP'];
$IdDepartamento=$_POST['IdDepartamento'];
$IdPuesto=$_POST['IdPuesto'];
$IdNomina=$_POST['IdNomina'];
$IdDepartamentos=$_POST['IdDepartamentos'];
$IdNomina=$_POST['IdCuenta'];
$IdPuesto=$_POST['IdPuesto'];
$CURP=$_POST['CURP'];
$IdTurno=$_POST['IdTurno'];

$Con=Conectar();
$Query="UPDATE logentregas
SET Fecha='".$Fecha."',Status='".$Status."',Observaciones='".$Observaciones."',NombreReceptor='".$NombreReceptor."' WHERE IdEmpleado=".$IdEmpleado;
//echo "Se realiza correctamente la actualizacion";
Ejecutar($Query,$Con);
Desconectar($Con);

  header("Location: ConsultaLogEntregas.php");

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Empleado</title>
  <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body>
<?php  echo $_GET['IdNomina']; ?>
<div align="center">
                    <h1 class="page-header">Actualizar Empleado</h1>
                </div>

<form id="form1" name="form1" method="post" action="">
</form>
                        <div class="panel-body">

<form role="form" method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdEmpleado:</td>
      <td><input class="form-control" type="text" name="IdEmpleado" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input class="form-control"  type="text" name="Telefono" value="<?php echo $_GET['Telefono']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direccion:</td>
      <td><input class="form-control" type="text" name="Direccion" value="<?php echo $_GET['Direccion']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaNacimiento:</td>
      <td><input  class="form-control" type="text" name="FechaNacimiento" value="<?php echo $_GET['FechaNacimiento']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaContratacion:</td>
      <td><input class="form-control" type="text" name="FechaContratacion" value="<?php echo $_GET['FechaContratacion']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">RFC:</td>
      <td><input class="form-control" type="text" name="RFC" value="<?php echo $_GET['RFC']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IMSS:</td>
      <td><input class="form-control" type="text" name="IMSS" value="<?php echo $_GET['IMSS']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Correo:</td>
      <td><input class="form-control" type="text" name="Correo" value="<?php echo $_GET['Correo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Sexo:</td>
      <td><input class="form-control" type="text" name="Sexo" value="<?php echo $_GET['Sexo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">EstadoCivil:</td>
      <td><input class="form-control" type="text" name="EstadoCivil" value="<?php echo $_GET['EstadoCivil']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">CURP:</td>
      <td><input class="form-control" type="text" name="CURP" value="<?php echo $_GET['CURP']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdDepartamento:</td>
      <td><input class="form-control" type="text" name="IdDepartamento" value="<?php echo $_GET['IdDepartamento']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdPuesto:</td>
      <td><input class="form-control" type="text" name="IdPuesto" value="<?php echo $_GET['IdPuesto']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdNomina:</td>
      <td><input class="form-control" type="text" name="IdNomina" value="<?php echo $_GET['IdNomina']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCuenta:</td>
      <td><input  class="form-control" type="text" name="IdCuenta" value="<?php echo $_GET['IdCuenta']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdDepartamentos:</td>
      <td><input class="form-control"  type="text" name="IdDepartamentos" value="<?php echo $_GET['IdDepartamentos']; ?>" size="32"></td>
    </tr>
 
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Actualizar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>

</div> 
</body>
</html>
