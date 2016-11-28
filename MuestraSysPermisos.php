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

$maxRows_R24 = 10;
$pageNum_R24 = 0;
if (isset($_GET['pageNum_R24'])) {
  $pageNum_R24 = $_GET['pageNum_R24'];
}
$startRow_R24 = $pageNum_R24 * $maxRows_R24;

mysql_select_db($database_localhost, $localhost);
$query_R24 = "SELECT * FROM syspermisos";
$query_limit_R24 = sprintf("%s LIMIT %d, %d", $query_R24, $startRow_R24, $maxRows_R24);
$R24 = mysql_query($query_limit_R24, $localhost) or die(mysql_error());
$row_R24 = mysql_fetch_assoc($R24);

if (isset($_GET['totalRows_R24'])) {
  $totalRows_R24 = $_GET['totalRows_R24'];
} else {
  $all_R24 = mysql_query($query_R24);
  $totalRows_R24 = mysql_num_rows($all_R24);
}
$totalPages_R24 = ceil($totalRows_R24/$maxRows_R24)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mostrar Permisos</title>


 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
     include 'menu.php';
?>
<div align="center">
                    <h1 class="page-header">Mostrar Permisos</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<form id="form1" name="form1" method="post" action="">
  <table border="1" class="table table-striped table-bordered table-hover">
    <tr>
      <td>IdPermiso</td>
      <td>TipoPermiso</td>
      <td>Status</td>
      <td>FechaOtorgacion</td>
      <td>FechaVencimiento</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R24['IdPermiso']; ?></td>
        <td><?php echo $row_R24['TipoPermiso']; ?></td>
        <td><?php echo $row_R24['Status']; ?></td>
        <td><?php echo $row_R24['FechaOtorgacion']; ?></td>
        <td><?php echo $row_R24['FechaVencimiento']; ?></td>
      </tr>
      <?php } while ($row_R24 = mysql_fetch_assoc($R24)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R24);
?>
