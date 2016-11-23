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

$maxRows_R17 = 10;
$pageNum_R17 = 0;
if (isset($_GET['pageNum_R17'])) {
  $pageNum_R17 = $_GET['pageNum_R17'];
}
$startRow_R17 = $pageNum_R17 * $maxRows_R17;

mysql_select_db($database_localhost, $localhost);
$query_R17 = "SELECT * FROM logenvios";
$query_limit_R17 = sprintf("%s LIMIT %d, %d", $query_R17, $startRow_R17, $maxRows_R17);
$R17 = mysql_query($query_limit_R17, $localhost) or die(mysql_error());
$row_R17 = mysql_fetch_assoc($R17);

if (isset($_GET['totalRows_R17'])) {
  $totalRows_R17 = $_GET['totalRows_R17'];
} else {
  $all_R17 = mysql_query($query_R17);
  $totalRows_R17 = mysql_num_rows($all_R17);
}
$totalPages_R17 = ceil($totalRows_R17/$maxRows_R17)-1;
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
      <td>IdEnvio</td>
      <td>Fecha</td>
      <td>Status</td>
      <td>Observaciones</td>
      <td>DomicilioEntrega</td>
      <td>IdFormaEnvio</td>
      <td>IdEntrega</td>
      <td>IdVenta</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R17['IdEnvio']; ?></td>
        <td><?php echo $row_R17['Fecha']; ?></td>
        <td><?php echo $row_R17['Status']; ?></td>
        <td><?php echo $row_R17['Observaciones']; ?></td>
        <td><?php echo $row_R17['DomicilioEntrega']; ?></td>
        <td><?php echo $row_R17['IdFormaEnvio']; ?></td>
        <td><?php echo $row_R17['IdEntrega']; ?></td>
        <td><?php echo $row_R17['IdVenta']; ?></td>
      </tr>
      <?php } while ($row_R17 = mysql_fetch_assoc($R17)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R17);
?>
