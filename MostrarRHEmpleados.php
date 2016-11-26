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

$maxRows_R19 = 10;
$pageNum_R19 = 0;
if (isset($_GET['pageNum_R19'])) {
  $pageNum_R19 = $_GET['pageNum_R19'];
}
$startRow_R19 = $pageNum_R19 * $maxRows_R19;

mysql_select_db($database_localhost, $localhost);
$query_R19 = "SELECT * FROM rhempleados";
$query_limit_R19 = sprintf("%s LIMIT %d, %d", $query_R19, $startRow_R19, $maxRows_R19);
$R19 = mysql_query($query_limit_R19, $localhost) or die(mysql_error());
$row_R19 = mysql_fetch_assoc($R19);

if (isset($_GET['totalRows_R19'])) {
  $totalRows_R19 = $_GET['totalRows_R19'];
} else {
  $all_R19 = mysql_query($query_R19);
  $totalRows_R19 = mysql_num_rows($all_R19);
}
$totalPages_R19 = ceil($totalRows_R19/$maxRows_R19)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Mostrar Empleados</title>


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
<div align="center">
                    <h1 class="page-header">Mostrar Empleados</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<form id="form1" name="form1" method="post" action="">
  <table border="1" class="table table-striped table-bordered table-hover" >
    <tr>
      <td>IdEmpleado</td>
      <td>Nombre</td>
      <td>Telefono</td>
      <td>Direccion</td>
      <td>FechaNacimiento</td>
      <td>FechaContratacion</td>
      <td>RFC</td>
      <td>IMSS</td>
      <td>Correo</td>
      <td>Sexo</td>
      <td>EstadoCivil</td>
      <td>CURP</td>
      <td>IdDepartamento</td>
      <td>IdPuesto</td>
      <td>IdNomina</td>
      <td>IdCuenta</td>
      <td>IdDepartamentos</td>
      <td>IdTurno</td>
      <td>IdCompra</td>
      <td>IdVenta</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R19['IdEmpleado']; ?></td>
        <td><?php echo $row_R19['Nombre']; ?></td>
        <td><?php echo $row_R19['Telefono']; ?></td>
        <td><?php echo $row_R19['Direccion']; ?></td>
        <td><?php echo $row_R19['FechaNacimiento']; ?></td>
        <td><?php echo $row_R19['FechaContratacion']; ?></td>
        <td><?php echo $row_R19['RFC']; ?></td>
        <td><?php echo $row_R19['IMSS']; ?></td>
        <td><?php echo $row_R19['Correo']; ?></td>
        <td><?php echo $row_R19['Sexo']; ?></td>
        <td><?php echo $row_R19['EstadoCivil']; ?></td>
        <td><?php echo $row_R19['CURP']; ?></td>
        <td><?php echo $row_R19['IdDepartamento']; ?></td>
        <td><?php echo $row_R19['IdPuesto']; ?></td>
        <td><?php echo $row_R19['IdNomina']; ?></td>
        <td><?php echo $row_R19['IdCuenta']; ?></td>
        <td><?php echo $row_R19['IdDepartamentos']; ?></td>
        <td><?php echo $row_R19['IdTurno']; ?></td>
        <td><?php echo $row_R19['IdCompra']; ?></td>
        <td><?php echo $row_R19['IdVenta']; ?></td>
      </tr>
      <?php } while ($row_R19 = mysql_fetch_assoc($R19)); ?>
  </table>
</form>
</div>
</div>
</body>
</html>
<?php
mysql_free_result($R19);
?>
