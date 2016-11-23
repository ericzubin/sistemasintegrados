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

$maxRows_R25 = 10;
$pageNum_R25 = 0;
if (isset($_GET['pageNum_R25'])) {
  $pageNum_R25 = $_GET['pageNum_R25'];
}
$startRow_R25 = $pageNum_R25 * $maxRows_R25;

mysql_select_db($database_localhost, $localhost);
$query_R25 = "SELECT * FROM systiposcuentas";
$query_limit_R25 = sprintf("%s LIMIT %d, %d", $query_R25, $startRow_R25, $maxRows_R25);
$R25 = mysql_query($query_limit_R25, $localhost) or die(mysql_error());
$row_R25 = mysql_fetch_assoc($R25);

if (isset($_GET['totalRows_R25'])) {
  $totalRows_R25 = $_GET['totalRows_R25'];
} else {
  $all_R25 = mysql_query($query_R25);
  $totalRows_R25 = mysql_num_rows($all_R25);
}
$totalPages_R25 = ceil($totalRows_R25/$maxRows_R25)-1;
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
      <td>IdTipo</td>
      <td>Nombre</td>
      <td>Status</td>
      <td>IdPermiso</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R25['IdTipo']; ?></td>
        <td><?php echo $row_R25['Nombre']; ?></td>
        <td><?php echo $row_R25['Status']; ?></td>
        <td><?php echo $row_R25['IdPermiso']; ?></td>
      </tr>
      <?php } while ($row_R25 = mysql_fetch_assoc($R25)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R25);
?>
