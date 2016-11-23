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

$maxRows_R14 = 10;
$pageNum_R14 = 0;
if (isset($_GET['pageNum_R14'])) {
  $pageNum_R14 = $_GET['pageNum_R14'];
}
$startRow_R14 = $pageNum_R14 * $maxRows_R14;

mysql_select_db($database_localhost, $localhost);
$query_R14 = "SELECT * FROM invproductos";
$query_limit_R14 = sprintf("%s LIMIT %d, %d", $query_R14, $startRow_R14, $maxRows_R14);
$R14 = mysql_query($query_limit_R14, $localhost) or die(mysql_error());
$row_R14 = mysql_fetch_assoc($R14);

if (isset($_GET['totalRows_R14'])) {
  $totalRows_R14 = $_GET['totalRows_R14'];
} else {
  $all_R14 = mysql_query($query_R14);
  $totalRows_R14 = mysql_num_rows($all_R14);
}
$totalPages_R14 = ceil($totalRows_R14/$maxRows_R14)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table border="1">
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
      <td>ImpuestoEspecial</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R14['IdProducto']; ?></td>
        <td><?php echo $row_R14['Nombre']; ?></td>
        <td><?php echo $row_R14['Marca']; ?></td>
        <td><?php echo $row_R14['Descripcion']; ?></td>
        <td><?php echo $row_R14['Existencia']; ?></td>
        <td><?php echo $row_R14['UnidadMedicion']; ?></td>
        <td><?php echo $row_R14['Categoria']; ?></td>
        <td><?php echo $row_R14['PrecioCompra']; ?></td>
        <td><?php echo $row_R14['PrecioVenta']; ?></td>
        <td><?php echo $row_R14['Descuento']; ?></td>
        <td><?php echo $row_R14['ImpuestoEspecial']; ?></td>
      </tr>
      <?php } while ($row_R14 = mysql_fetch_assoc($R14)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R14);
?>
