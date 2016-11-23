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

$maxRows_RS5 = 10;
$pageNum_RS5 = 0;
if (isset($_GET['pageNum_RS5'])) {
  $pageNum_RS5 = $_GET['pageNum_RS5'];
}
$startRow_RS5 = $pageNum_RS5 * $maxRows_RS5;

mysql_select_db($database_localhost, $localhost);
$query_RS5 = "SELECT * FROM fincuentasporcobrar";
$query_limit_RS5 = sprintf("%s LIMIT %d, %d", $query_RS5, $startRow_RS5, $maxRows_RS5);
$RS5 = mysql_query($query_limit_RS5, $localhost) or die(mysql_error());
$row_RS5 = mysql_fetch_assoc($RS5);

if (isset($_GET['totalRows_RS5'])) {
  $totalRows_RS5 = $_GET['totalRows_RS5'];
} else {
  $all_RS5 = mysql_query($query_RS5);
  $totalRows_RS5 = mysql_num_rows($all_RS5);
}
$totalPages_RS5 = ceil($totalRows_RS5/$maxRows_RS5)-1;
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
      <td>IdCuentaPorCobrar</td>
      <td>Fecha</td>
      <td>Monto</td>
      <td>Status</td>
      <td>Plazo</td>
      <td>Tasa</td>
      <td>IdVenta</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS5['IdCuentaPorCobrar']; ?></td>
        <td><?php echo $row_RS5['Fecha']; ?></td>
        <td><?php echo $row_RS5['Monto']; ?></td>
        <td><?php echo $row_RS5['Status']; ?></td>
        <td><?php echo $row_RS5['Plazo']; ?></td>
        <td><?php echo $row_RS5['Tasa']; ?></td>
        <td><?php echo $row_RS5['IdVenta']; ?></td>
      </tr>
      <?php } while ($row_RS5 = mysql_fetch_assoc($RS5)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS5);
?>
