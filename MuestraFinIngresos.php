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

$maxRows_RS9 = 10;
$pageNum_RS9 = 0;
if (isset($_GET['pageNum_RS9'])) {
  $pageNum_RS9 = $_GET['pageNum_RS9'];
}
$startRow_RS9 = $pageNum_RS9 * $maxRows_RS9;

mysql_select_db($database_localhost, $localhost);
$query_RS9 = "SELECT * FROM finingresos";
$query_limit_RS9 = sprintf("%s LIMIT %d, %d", $query_RS9, $startRow_RS9, $maxRows_RS9);
$RS9 = mysql_query($query_limit_RS9, $localhost) or die(mysql_error());
$row_RS9 = mysql_fetch_assoc($RS9);

if (isset($_GET['totalRows_RS9'])) {
  $totalRows_RS9 = $_GET['totalRows_RS9'];
} else {
  $all_RS9 = mysql_query($query_RS9);
  $totalRows_RS9 = mysql_num_rows($all_RS9);
}
$totalPages_RS9 = ceil($totalRows_RS9/$maxRows_RS9)-1;
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
      <td>IdIngreso</td>
      <td>Fecha</td>
      <td>Monto</td>
      <td>Status</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS9['IdIngreso']; ?></td>
        <td><?php echo $row_RS9['Fecha']; ?></td>
        <td><?php echo $row_RS9['Monto']; ?></td>
        <td><?php echo $row_RS9['Status']; ?></td>
      </tr>
      <?php } while ($row_RS9 = mysql_fetch_assoc($RS9)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS9);
?>
