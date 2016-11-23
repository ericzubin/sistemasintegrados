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

$maxRows_R26 = 10;
$pageNum_R26 = 0;
if (isset($_GET['pageNum_R26'])) {
  $pageNum_R26 = $_GET['pageNum_R26'];
}
$startRow_R26 = $pageNum_R26 * $maxRows_R26;

mysql_select_db($database_localhost, $localhost);
$query_R26 = "SELECT * FROM venclientes";
$query_limit_R26 = sprintf("%s LIMIT %d, %d", $query_R26, $startRow_R26, $maxRows_R26);
$R26 = mysql_query($query_limit_R26, $localhost) or die(mysql_error());
$row_R26 = mysql_fetch_assoc($R26);

if (isset($_GET['totalRows_R26'])) {
  $totalRows_R26 = $_GET['totalRows_R26'];
} else {
  $all_R26 = mysql_query($query_R26);
  $totalRows_R26 = mysql_num_rows($all_R26);
}
$totalPages_R26 = ceil($totalRows_R26/$maxRows_R26)-1;
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
      <td>IdCliente</td>
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
        <td><?php echo $row_R26['IdCliente']; ?></td>
        <td><?php echo $row_R26['Nombre']; ?></td>
        <td><?php echo $row_R26['DomicilioFiscal']; ?></td>
        <td><?php echo $row_R26['DomicilioParticular']; ?></td>
        <td><?php echo $row_R26['RFC']; ?></td>
        <td><?php echo $row_R26['Telefono']; ?></td>
        <td><?php echo $row_R26['Correo']; ?></td>
        <td><?php echo $row_R26['Status']; ?></td>
      </tr>
      <?php } while ($row_R26 = mysql_fetch_assoc($R26)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R26);
?>
