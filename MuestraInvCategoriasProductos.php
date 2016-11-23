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

$maxRows_R12 = 10;
$pageNum_R12 = 0;
if (isset($_GET['pageNum_R12'])) {
  $pageNum_R12 = $_GET['pageNum_R12'];
}
$startRow_R12 = $pageNum_R12 * $maxRows_R12;

mysql_select_db($database_localhost, $localhost);
$query_R12 = "SELECT * FROM invcategoriasproductos";
$query_limit_R12 = sprintf("%s LIMIT %d, %d", $query_R12, $startRow_R12, $maxRows_R12);
$R12 = mysql_query($query_limit_R12, $localhost) or die(mysql_error());
$row_R12 = mysql_fetch_assoc($R12);

if (isset($_GET['totalRows_R12'])) {
  $totalRows_R12 = $_GET['totalRows_R12'];
} else {
  $all_R12 = mysql_query($query_R12);
  $totalRows_R12 = mysql_num_rows($all_R12);
}
$totalPages_R12 = ceil($totalRows_R12/$maxRows_R12)-1;
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
      <td>IdCategoria</td>
      <td>Nombre</td>
      <td>Status</td>
      <td>IdProducto</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R12['IdCategoria']; ?></td>
        <td><?php echo $row_R12['Nombre']; ?></td>
        <td><?php echo $row_R12['Status']; ?></td>
        <td><?php echo $row_R12['IdProducto']; ?></td>
      </tr>
      <?php } while ($row_R12 = mysql_fetch_assoc($R12)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R12);
?>
