<?php require_once('Connections/localhost.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO rhempleados (IdEmpleado, Nombre, Telefono, Direccion, FechaNacimiento, FechaContratacion, RFC, IMSS, Correo, Sexo, EstadoCivil, CURP, IdDepartamento, IdPuesto, IdNomina, IdCuenta, IdDepartamentos, IdTurno, IdCompra, IdVenta) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdEmpleado'], "int"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Telefono'], "int"),
                       GetSQLValueString($_POST['Direccion'], "text"),
                       GetSQLValueString($_POST['FechaNacimiento'], "date"),
                       GetSQLValueString($_POST['FechaContratacion'], "date"),
                       GetSQLValueString($_POST['RFC'], "text"),
                       GetSQLValueString($_POST['IMSS'], "int"),
                       GetSQLValueString($_POST['Correo'], "text"),
                       GetSQLValueString($_POST['Sexo'], "int"),
                       GetSQLValueString($_POST['EstadoCivil'], "text"),
                       GetSQLValueString($_POST['CURP'], "text"),
                       GetSQLValueString($_POST['IdDepartamento'], "int"),
                       GetSQLValueString($_POST['IdPuesto'], "int"),
                       GetSQLValueString($_POST['IdNomina'], "int"),
                       GetSQLValueString($_POST['IdCuenta'], "text"),
                       GetSQLValueString($_POST['IdDepartamentos'], "int"),
                       GetSQLValueString($_POST['IdTurno'], "int"),
                       GetSQLValueString($_POST['IdCompra'], "int"),
                       GetSQLValueString($_POST['IdVenta'], "int"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php include("menuUser.php"); ?>

<div align="center">
                    <h1 class="page-header">Insertar Empleado</h1>
                </div>

<form id="form1" name="form1" method="post" action="">
</form>
                        <div class="panel-body">

<form role="form" method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdEmpleado:</td>
      <td><input class="form-control" type="text" name="IdEmpleado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="Nombre" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input class="form-control"  type="text" name="Telefono" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direccion:</td>
      <td><input class="form-control" type="text" name="Direccion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaNacimiento:</td>
      <td><input  class="form-control" type="text" name="FechaNacimiento" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaContratacion:</td>
      <td><input class="form-control" type="text" name="FechaContratacion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">RFC:</td>
      <td><input class="form-control" type="text" name="RFC" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IMSS:</td>
      <td><input class="form-control" type="text" name="IMSS" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Correo:</td>
      <td><input class="form-control" type="text" name="Correo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Sexo:</td>
      <td><input class="form-control" type="text" name="Sexo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">EstadoCivil:</td>
      <td><input class="form-control" type="text" name="EstadoCivil" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">CURP:</td>
      <td><input class="form-control" type="text" name="CURP" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdDepartamento:</td>
      <td><input class="form-control" type="text" name="IdDepartamento" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdPuesto:</td>
      <td><input class="form-control" type="text" name="IdPuesto" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdNomina:</td>
      <td><input class="form-control" type="text" name="IdNomina" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCuenta:</td>
      <td><input  class="form-control" type="text" name="IdCuenta" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdDepartamentos:</td>
      <td><input class="form-control"  type="text" name="IdDepartamentos" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdTurno:</td>
      <td><input class="form-control" type="text" name="IdTurno" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCompra:</td>
      <td><input class="form-control" type="text" name="IdCompra" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdVenta:</td>
      <td><input class="form-control" type="text" name="IdVenta" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Insertar Usuario"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>

</div> 
</body>
</html>
