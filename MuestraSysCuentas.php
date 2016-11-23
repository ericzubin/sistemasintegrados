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

$maxRows_R23 = 10;
$pageNum_R23 = 0;
if (isset($_GET['pageNum_R23'])) {
  $pageNum_R23 = $_GET['pageNum_R23'];
}
$startRow_R23 = $pageNum_R23 * $maxRows_R23;

mysql_select_db($database_localhost, $localhost);
$query_R23 = "SELECT * FROM syscuentas";
$query_limit_R23 = sprintf("%s LIMIT %d, %d", $query_R23, $startRow_R23, $maxRows_R23);
$R23 = mysql_query($query_limit_R23, $localhost) or die(mysql_error());
$row_R23 = mysql_fetch_assoc($R23);

if (isset($_GET['totalRows_R23'])) {
  $totalRows_R23 = $_GET['totalRows_R23'];
} else {
  $all_R23 = mysql_query($query_R23);
  $totalRows_R23 = mysql_num_rows($all_R23);
}
$totalPages_R23 = ceil($totalRows_R23/$maxRows_R23)-1;
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
      <td>IdCuenta</td>
      <td>Password</td>
      <td>TipoCuenta</td>
      <td>Intentos</td>
      <td>Status</td>
      <td>FechaUltimoAcceso</td>
      <td>IdTipo</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R23['IdCuenta']; ?></td>
        <td><?php echo $row_R23['Password']; ?></td>
        <td><?php echo $row_R23['TipoCuenta']; ?></td>
        <td><?php echo $row_R23['Intentos']; ?></td>
        <td><?php echo $row_R23['Status']; ?></td>
        <td><?php echo $row_R23['FechaUltimoAcceso']; ?></td>
        <td><?php echo $row_R23['IdTipo']; ?></td>
      </tr>
      <?php } while ($row_R23 = mysql_fetch_assoc($R23)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R23);
?>
