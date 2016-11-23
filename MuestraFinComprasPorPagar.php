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

$maxRows_RS6 = 10;
$pageNum_RS6 = 0;
if (isset($_GET['pageNum_RS6'])) {
  $pageNum_RS6 = $_GET['pageNum_RS6'];
}
$startRow_RS6 = $pageNum_RS6 * $maxRows_RS6;

mysql_select_db($database_localhost, $localhost);
$query_RS6 = "SELECT * FROM fincuentasporpagar";
$query_limit_RS6 = sprintf("%s LIMIT %d, %d", $query_RS6, $startRow_RS6, $maxRows_RS6);
$RS6 = mysql_query($query_limit_RS6, $localhost) or die(mysql_error());
$row_RS6 = mysql_fetch_assoc($RS6);

if (isset($_GET['totalRows_RS6'])) {
  $totalRows_RS6 = $_GET['totalRows_RS6'];
} else {
  $all_RS6 = mysql_query($query_RS6);
  $totalRows_RS6 = mysql_num_rows($all_RS6);
}
$totalPages_RS6 = ceil($totalRows_RS6/$maxRows_RS6)-1;
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
      <td>IdCuentaPorPagar</td>
      <td>Fecha</td>
      <td>Monto</td>
      <td>Status</td>
      <td>Plazo</td>
      <td>Tasa</td>
      <td>IdCompra</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS6['IdCuentaPorPagar']; ?></td>
        <td><?php echo $row_RS6['Fecha']; ?></td>
        <td><?php echo $row_RS6['Monto']; ?></td>
        <td><?php echo $row_RS6['Status']; ?></td>
        <td><?php echo $row_RS6['Plazo']; ?></td>
        <td><?php echo $row_RS6['Tasa']; ?></td>
        <td><?php echo $row_RS6['IdCompra']; ?></td>
      </tr>
      <?php } while ($row_RS6 = mysql_fetch_assoc($RS6)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS6);
?>
