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

$maxRows_R10 = 10;
$pageNum_R10 = 0;
if (isset($_GET['pageNum_R10'])) {
  $pageNum_R10 = $_GET['pageNum_R10'];
}
$startRow_R10 = $pageNum_R10 * $maxRows_R10;

mysql_select_db($database_localhost, $localhost);
$query_R10 = "SELECT * FROM finmetodosdepago";
$query_limit_R10 = sprintf("%s LIMIT %d, %d", $query_R10, $startRow_R10, $maxRows_R10);
$R10 = mysql_query($query_limit_R10, $localhost) or die(mysql_error());
$row_R10 = mysql_fetch_assoc($R10);

if (isset($_GET['totalRows_R10'])) {
  $totalRows_R10 = $_GET['totalRows_R10'];
} else {
  $all_R10 = mysql_query($query_R10);
  $totalRows_R10 = mysql_num_rows($all_R10);
}
$totalPages_R10 = ceil($totalRows_R10/$maxRows_R10)-1;
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
      <td>IdMetodoPago</td>
      <td>Nombre</td>
      <td>Status</td>
      <td>Observacion</td>
      <td>IdCliente</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R10['IdMetodoPago']; ?></td>
        <td><?php echo $row_R10['Nombre']; ?></td>
        <td><?php echo $row_R10['Status']; ?></td>
        <td><?php echo $row_R10['Observacion']; ?></td>
        <td><?php echo $row_R10['IdCliente']; ?></td>
      </tr>
      <?php } while ($row_R10 = mysql_fetch_assoc($R10)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R10);
?>
