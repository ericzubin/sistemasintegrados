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

$maxRows_RS4 = 10;
$pageNum_RS4 = 0;
if (isset($_GET['pageNum_RS4'])) {
  $pageNum_RS4 = $_GET['pageNum_RS4'];
}
$startRow_RS4 = $pageNum_RS4 * $maxRows_RS4;

mysql_select_db($database_localhost, $localhost);
$query_RS4 = "SELECT * FROM comproveedores";
$query_limit_RS4 = sprintf("%s LIMIT %d, %d", $query_RS4, $startRow_RS4, $maxRows_RS4);
$RS4 = mysql_query($query_limit_RS4, $localhost) or die(mysql_error());
$row_RS4 = mysql_fetch_assoc($RS4);

if (isset($_GET['totalRows_RS4'])) {
  $totalRows_RS4 = $_GET['totalRows_RS4'];
} else {
  $all_RS4 = mysql_query($query_RS4);
  $totalRows_RS4 = mysql_num_rows($all_RS4);
}
$totalPages_RS4 = ceil($totalRows_RS4/$maxRows_RS4)-1;
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
      <td>IdProveedor</td>
      <td>Nombre</td>
      <td>DomicilioFiscal</td>
      <td>DomicilioParticular</td>
      <td>RFC</td>
      <td>Telefono</td>
      <td>Correo</td>
      <td>Status</td>
    </tr>
    <?php do { ?>
    <tr>
      <td><?php echo $row_RS4['IdProveedor']; ?></td>
      <td><?php echo $row_RS4['Nombre']; ?></td>
      <td><?php echo $row_RS4['DomicilioFiscal']; ?></td>
      <td><?php echo $row_RS4['DomicilioParticular']; ?></td>
      <td><?php echo $row_RS4['RFC']; ?></td>
      <td><?php echo $row_RS4['Telefono']; ?></td>
      <td><?php echo $row_RS4['Correo']; ?></td>
      <td><?php echo $row_RS4['Status']; ?></td>
    </tr>
    <?php } while ($row_RS4 = mysql_fetch_assoc($RS4)); ?>
  </table>
</form>

</body>
</html>
<?php
mysql_free_result($RS4);
?>
