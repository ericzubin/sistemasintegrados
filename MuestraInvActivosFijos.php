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

$maxRows_R11 = 10;
$pageNum_R11 = 0;
if (isset($_GET['pageNum_R11'])) {
  $pageNum_R11 = $_GET['pageNum_R11'];
}
$startRow_R11 = $pageNum_R11 * $maxRows_R11;

mysql_select_db($database_localhost, $localhost);
$query_R11 = "SELECT * FROM invactivosfijos";
$query_limit_R11 = sprintf("%s LIMIT %d, %d", $query_R11, $startRow_R11, $maxRows_R11);
$R11 = mysql_query($query_limit_R11, $localhost) or die(mysql_error());
$row_R11 = mysql_fetch_assoc($R11);

if (isset($_GET['totalRows_R11'])) {
  $totalRows_R11 = $_GET['totalRows_R11'];
} else {
  $all_R11 = mysql_query($query_R11);
  $totalRows_R11 = mysql_num_rows($all_R11);
}
$totalPages_R11 = ceil($totalRows_R11/$maxRows_R11)-1;
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
      <td>IdActivo</td>
      <td>Nombre</td>
      <td>Caracteristicas</td>
      <td>Estado</td>
      <td>TipoActivo</td>
      <td>IdSucursal</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R11['IdActivo']; ?></td>
        <td><?php echo $row_R11['Nombre']; ?></td>
        <td><?php echo $row_R11['Caracteristicas']; ?></td>
        <td><?php echo $row_R11['Estado']; ?></td>
        <td><?php echo $row_R11['TipoActivo']; ?></td>
        <td><?php echo $row_R11['IdSucursal']; ?></td>
      </tr>
      <?php } while ($row_R11 = mysql_fetch_assoc($R11)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R11);
?>
