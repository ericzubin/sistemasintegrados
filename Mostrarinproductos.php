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

$maxRows_R18 = 10;
$pageNum_R18 = 0;
if (isset($_GET['pageNum_R18'])) {
  $pageNum_R18 = $_GET['pageNum_R18'];
}
$startRow_R18 = $pageNum_R18 * $maxRows_R18;

mysql_select_db($database_localhost, $localhost);
$query_R18 = "SELECT * FROM invproductos";
$query_limit_R18 = sprintf("%s LIMIT %d, %d", $query_R18, $startRow_R18, $maxRows_R18);
$R18 = mysql_query($query_limit_R18, $localhost) or die(mysql_error());
$row_R18 = mysql_fetch_assoc($R18);

if (isset($_GET['totalRows_R18'])) {
  $totalRows_R18 = $_GET['totalRows_R18'];
} else {
  $all_R18 = mysql_query($query_R18);
  $totalRows_R18 = mysql_num_rows($all_R18);
}
$totalPages_R18 = ceil($totalRows_R18/$maxRows_R18)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mostrar Prductos</title>


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
<?php
     include 'menu.php';
?>
<div align="center">
                    <h1 class="page-header">Mostrar Productos</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<form id="form1" name="form1" method="post" action="">
  <table border="1" class="table table-striped table-bordered table-hover">
    <tr>
      <td>IdProducto</td>
      <td>Nombre</td>
      <td>Marca</td>
      <td>Descripcion</td>
      <td>Existencia</td>
      <td>UnidadMedicion</td>
      <td>Categoria</td>
      <td>PrecioCompra</td>
      <td>PrecioVenta</td>
      <td>Descuento</td>
      <td>Impuesto Especial</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R18['IdProducto']; ?></td>
        <td><?php echo $row_R18['Nombre']; ?></td>
        <td><?php echo $row_R18['Marca']; ?></td>
        <td><?php echo $row_R18['Descripcion']; ?></td>
        <td><?php echo $row_R18['Existencia']; ?></td>
        <td><?php echo $row_R18['UnidadMedicion']; ?></td>
        <td><?php echo $row_R18['Categoria']; ?></td>
        <td><?php echo $row_R18['PrecioCompra']; ?></td>
        <td><?php echo $row_R18['PrecioVenta']; ?></td>
        <td><?php echo $row_R18['Descuento']; ?></td>
        <td><?php echo $row_R18['ImpuestoEspecial']; ?></td>
      </tr>
      <?php } while ($row_R18 = mysql_fetch_assoc($R18)); ?>
  </table>
</form>

</div>
</div>
</body>
</html>
<?php
mysql_free_result($R18);
?>
