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

$maxRows_RS7 = 10;
$pageNum_RS7 = 0;
if (isset($_GET['pageNum_RS7'])) {
  $pageNum_RS7 = $_GET['pageNum_RS7'];
}
$startRow_RS7 = $pageNum_RS7 * $maxRows_RS7;

mysql_select_db($database_localhost, $localhost);
$query_RS7 = "SELECT * FROM finegresos";
$query_limit_RS7 = sprintf("%s LIMIT %d, %d", $query_RS7, $startRow_RS7, $maxRows_RS7);
$RS7 = mysql_query($query_limit_RS7, $localhost) or die(mysql_error());
$row_RS7 = mysql_fetch_assoc($RS7);

if (isset($_GET['totalRows_RS7'])) {
  $totalRows_RS7 = $_GET['totalRows_RS7'];
} else {
  $all_RS7 = mysql_query($query_RS7);
  $totalRows_RS7 = mysql_num_rows($all_RS7);
}
$totalPages_RS7 = ceil($totalRows_RS7/$maxRows_RS7)-1;
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
      <td>IdEgreso</td>
      <td>Fecha</td>
      <td>Monto</td>
      <td>Status</td>
      <td>IdSuministro</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_RS7['IdEgreso']; ?></td>
        <td><?php echo $row_RS7['Fecha']; ?></td>
        <td><?php echo $row_RS7['Monto']; ?></td>
        <td><?php echo $row_RS7['Status']; ?></td>
        <td><?php echo $row_RS7['IdSuministro']; ?></td>
      </tr>
      <?php } while ($row_RS7 = mysql_fetch_assoc($RS7)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($RS7);
?>
