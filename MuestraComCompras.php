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

$maxRows_RS1 = 10;
$pageNum_RS1 = 0;
if (isset($_GET['pageNum_RS1'])) {
  $pageNum_RS1 = $_GET['pageNum_RS1'];
}
$startRow_RS1 = $pageNum_RS1 * $maxRows_RS1;

mysql_select_db($database_localhost, $localhost);
$query_RS1 = "SELECT * FROM comcompras";
$query_limit_RS1 = sprintf("%s LIMIT %d, %d", $query_RS1, $startRow_RS1, $maxRows_RS1);
$RS1 = mysql_query($query_limit_RS1, $localhost) or die(mysql_error());
$row_RS1 = mysql_fetch_assoc($RS1);

if (isset($_GET['totalRows_RS1'])) {
  $totalRows_RS1 = $_GET['totalRows_RS1'];
} else {
  $all_RS1 = mysql_query($query_RS1);
  $totalRows_RS1 = mysql_num_rows($all_RS1);
}
$totalPages_RS1 = ceil($totalRows_RS1/$maxRows_RS1)-1;
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
      <td>IdCompra</td>
      <td>Fecha</td>
      <td>Monto</td>
      <td>NumeroArticulo</td>
      <td>Status</td>
      <td>IdProveedor</td>
      <td>IdEgreso</td>
      <td>IdMetodoPago</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS1['IdCompra']; ?></td>
        <td><?php echo $row_RS1['Fecha']; ?></td>
        <td><?php echo $row_RS1['Monto']; ?></td>
        <td><?php echo $row_RS1['NumeroArticulo']; ?></td>
        <td><?php echo $row_RS1['Status']; ?></td>
        <td><?php echo $row_RS1['IdProveedor']; ?></td>
        <td><?php echo $row_RS1['IdEgreso']; ?></td>
        <td><?php echo $row_RS1['IdMetodoPago']; ?></td>
      </tr>
      <?php } while ($row_RS1 = mysql_fetch_assoc($RS1)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS1);
?>
