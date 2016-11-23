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

$maxRows_RS8 = 10;
$pageNum_RS8 = 0;
if (isset($_GET['pageNum_RS8'])) {
  $pageNum_RS8 = $_GET['pageNum_RS8'];
}
$startRow_RS8 = $pageNum_RS8 * $maxRows_RS8;

mysql_select_db($database_localhost, $localhost);
$query_RS8 = "SELECT * FROM finformasdepago";
$query_limit_RS8 = sprintf("%s LIMIT %d, %d", $query_RS8, $startRow_RS8, $maxRows_RS8);
$RS8 = mysql_query($query_limit_RS8, $localhost) or die(mysql_error());
$row_RS8 = mysql_fetch_assoc($RS8);

if (isset($_GET['totalRows_RS8'])) {
  $totalRows_RS8 = $_GET['totalRows_RS8'];
} else {
  $all_RS8 = mysql_query($query_RS8);
  $totalRows_RS8 = mysql_num_rows($all_RS8);
}
$totalPages_RS8 = ceil($totalRows_RS8/$maxRows_RS8)-1;
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
      <td>IdFormaPago</td>
      <td>Nombre</td>
      <td>Status</td>
      <td>Observacion</td>
      <td>IdVenta</td>
      <td>IdCompra</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS8['IdFormaPago']; ?></td>
        <td><?php echo $row_RS8['Nombre']; ?></td>
        <td><?php echo $row_RS8['Status']; ?></td>
        <td><?php echo $row_RS8['Observacion']; ?></td>
        <td><?php echo $row_RS8['IdVenta']; ?></td>
        <td><?php echo $row_RS8['IdCompra']; ?></td>
      </tr>
      <?php } while ($row_RS8 = mysql_fetch_assoc($RS8)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS8);
?>
