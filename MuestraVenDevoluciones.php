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

$maxRows_R28 = 10;
$pageNum_R28 = 0;
if (isset($_GET['pageNum_R28'])) {
  $pageNum_R28 = $_GET['pageNum_R28'];
}
$startRow_R28 = $pageNum_R28 * $maxRows_R28;

mysql_select_db($database_localhost, $localhost);
$query_R28 = "SELECT * FROM vendevoluciones";
$query_limit_R28 = sprintf("%s LIMIT %d, %d", $query_R28, $startRow_R28, $maxRows_R28);
$R28 = mysql_query($query_limit_R28, $localhost) or die(mysql_error());
$row_R28 = mysql_fetch_assoc($R28);

if (isset($_GET['totalRows_R28'])) {
  $totalRows_R28 = $_GET['totalRows_R28'];
} else {
  $all_R28 = mysql_query($query_R28);
  $totalRows_R28 = mysql_num_rows($all_R28);
}
$totalPages_R28 = ceil($totalRows_R28/$maxRows_R28)-1;
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
      <td>IdDevolucion</td>
      <td>Fecha</td>
      <td>Motivo</td>
      <td>IdVenta</td>
      <td>IdCompra</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R28['IdDevolucion']; ?></td>
        <td><?php echo $row_R28['Fecha']; ?></td>
        <td><?php echo $row_R28['Motivo']; ?></td>
        <td><?php echo $row_R28['IdVenta']; ?></td>
        <td><?php echo $row_R28['IdCompra']; ?></td>
      </tr>
      <?php } while ($row_R28 = mysql_fetch_assoc($R28)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R28);
?>
