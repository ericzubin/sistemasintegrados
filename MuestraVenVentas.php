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

$maxRows_R29 = 10;
$pageNum_R29 = 0;
if (isset($_GET['pageNum_R29'])) {
  $pageNum_R29 = $_GET['pageNum_R29'];
}
$startRow_R29 = $pageNum_R29 * $maxRows_R29;

mysql_select_db($database_localhost, $localhost);
$query_R29 = "SELECT * FROM venventas";
$query_limit_R29 = sprintf("%s LIMIT %d, %d", $query_R29, $startRow_R29, $maxRows_R29);
$R29 = mysql_query($query_limit_R29, $localhost) or die(mysql_error());
$row_R29 = mysql_fetch_assoc($R29);

if (isset($_GET['totalRows_R29'])) {
  $totalRows_R29 = $_GET['totalRows_R29'];
} else {
  $all_R29 = mysql_query($query_R29);
  $totalRows_R29 = mysql_num_rows($all_R29);
}
$totalPages_R29 = ceil($totalRows_R29/$maxRows_R29)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mostrar Ventas</title>

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
                    <h1 class="page-header">Mostrar Ventas</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<form id="form1" name="form1" method="post" action="">
  <table border="1" class="table table-striped table-bordered table-hover">
    <tr>
      <td>IdVenta</td>
      <td>Fecha</td>
      <td>Monto</td>
      <td>NumeroArticulo</td>
      <td>Status</td>
      <td>IdCliente</td>
      <td>IdIngreso</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R29['IdVenta']; ?></td>
        <td><?php echo $row_R29['Fecha']; ?></td>
        <td><?php echo $row_R29['Monto']; ?></td>
        <td><?php echo $row_R29['NumeroArticulo']; ?></td>
        <td><?php echo $row_R29['Status']; ?></td>
        <td><?php echo $row_R29['IdCliente']; ?></td>
        <td><?php echo $row_R29['IdIngreso']; ?></td>
      </tr>
      <?php } while ($row_R29 = mysql_fetch_assoc($R29)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R29);
?>
