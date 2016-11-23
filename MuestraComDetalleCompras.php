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

$maxRows_RS2 = 10;
$pageNum_RS2 = 0;
if (isset($_GET['pageNum_RS2'])) {
  $pageNum_RS2 = $_GET['pageNum_RS2'];
}
$startRow_RS2 = $pageNum_RS2 * $maxRows_RS2;

mysql_select_db($database_localhost, $localhost);
$query_RS2 = "SELECT * FROM comdetallecompras";
$query_limit_RS2 = sprintf("%s LIMIT %d, %d", $query_RS2, $startRow_RS2, $maxRows_RS2);
$RS2 = mysql_query($query_limit_RS2, $localhost) or die(mysql_error());
$row_RS2 = mysql_fetch_assoc($RS2);

if (isset($_GET['totalRows_RS2'])) {
  $totalRows_RS2 = $_GET['totalRows_RS2'];
} else {
  $all_RS2 = mysql_query($query_RS2);
  $totalRows_RS2 = mysql_num_rows($all_RS2);
}
$totalPages_RS2 = ceil($totalRows_RS2/$maxRows_RS2)-1;
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
      <td>IdDetalleCompra</td>
      <td>IdCompra</td>
      <td>IdProducto</td>
      <td>PrecioUnitario</td>
      <td>Cantidad</td>
      <td>Descuento</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS2['IdDetalleCompra']; ?></td>
        <td><?php echo $row_RS2['IdCompra']; ?></td>
        <td><?php echo $row_RS2['IdProducto']; ?></td>
        <td><?php echo $row_RS2['PrecioUnitario']; ?></td>
        <td><?php echo $row_RS2['Cantidad']; ?></td>
        <td><?php echo $row_RS2['Descuento']; ?></td>
      </tr>
      <?php } while ($row_RS2 = mysql_fetch_assoc($RS2)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS2);
?>
