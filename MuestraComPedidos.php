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

$maxRows_RS3 = 10;
$pageNum_RS3 = 0;
if (isset($_GET['pageNum_RS3'])) {
  $pageNum_RS3 = $_GET['pageNum_RS3'];
}
$startRow_RS3 = $pageNum_RS3 * $maxRows_RS3;

mysql_select_db($database_localhost, $localhost);
$query_RS3 = "SELECT * FROM compedidos";
$query_limit_RS3 = sprintf("%s LIMIT %d, %d", $query_RS3, $startRow_RS3, $maxRows_RS3);
$RS3 = mysql_query($query_limit_RS3, $localhost) or die(mysql_error());
$row_RS3 = mysql_fetch_assoc($RS3);

if (isset($_GET['totalRows_RS3'])) {
  $totalRows_RS3 = $_GET['totalRows_RS3'];
} else {
  $all_RS3 = mysql_query($query_RS3);
  $totalRows_RS3 = mysql_num_rows($all_RS3);
}
$totalPages_RS3 = ceil($totalRows_RS3/$maxRows_RS3)-1;
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
      <td>IdPedido</td>
      <td>Fecha</td>
      <td>Status</td>
      <td>IdProveedor</td>
      <td>IdProducto</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS3['IdPedido']; ?></td>
        <td><?php echo $row_RS3['Fecha']; ?></td>
        <td><?php echo $row_RS3['Status']; ?></td>
        <td><?php echo $row_RS3['IdProveedor']; ?></td>
        <td><?php echo $row_RS3['IdProducto']; ?></td>
      </tr>
      <?php } while ($row_RS3 = mysql_fetch_assoc($RS3)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS3);
?>
