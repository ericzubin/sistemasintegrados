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

$maxRows_R21 = 10;
$pageNum_R21 = 0;
if (isset($_GET['pageNum_R21'])) {
  $pageNum_R21 = $_GET['pageNum_R21'];
}
$startRow_R21 = $pageNum_R21 * $maxRows_R21;

mysql_select_db($database_localhost, $localhost);
$query_R21 = "SELECT * FROM rhsucursales";
$query_limit_R21 = sprintf("%s LIMIT %d, %d", $query_R21, $startRow_R21, $maxRows_R21);
$R21 = mysql_query($query_limit_R21, $localhost) or die(mysql_error());
$row_R21 = mysql_fetch_assoc($R21);

if (isset($_GET['totalRows_R21'])) {
  $totalRows_R21 = $_GET['totalRows_R21'];
} else {
  $all_R21 = mysql_query($query_R21);
  $totalRows_R21 = mysql_num_rows($all_R21);
}
$totalPages_R21 = ceil($totalRows_R21/$maxRows_R21)-1;
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
      <td>IdSucursal</td>
      <td>Nombre</td>
      <td>localizacion</td>
      <td>Status</td>
      <td>Telefono</td>
      <td>DomicilioFiscal</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R21['IdSucursal']; ?></td>
        <td><?php echo $row_R21['Nombre']; ?></td>
        <td><?php echo $row_R21['localizacion']; ?></td>
        <td><?php echo $row_R21['Status']; ?></td>
        <td><?php echo $row_R21['Telefono']; ?></td>
        <td><?php echo $row_R21['DomicilioFiscal']; ?></td>
      </tr>
      <?php } while ($row_R21 = mysql_fetch_assoc($R21)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R21);
?>
