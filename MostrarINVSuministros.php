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

$maxRows_R15 = 10;
$pageNum_R15 = 0;
if (isset($_GET['pageNum_R15'])) {
  $pageNum_R15 = $_GET['pageNum_R15'];
}
$startRow_R15 = $pageNum_R15 * $maxRows_R15;

mysql_select_db($database_localhost, $localhost);
$query_R15 = "SELECT * FROM invsuministros";
$query_limit_R15 = sprintf("%s LIMIT %d, %d", $query_R15, $startRow_R15, $maxRows_R15);
$R15 = mysql_query($query_limit_R15, $localhost) or die(mysql_error());
$row_R15 = mysql_fetch_assoc($R15);

if (isset($_GET['totalRows_R15'])) {
  $totalRows_R15 = $_GET['totalRows_R15'];
} else {
  $all_R15 = mysql_query($query_R15);
  $totalRows_R15 = mysql_num_rows($all_R15);
}
$totalPages_R15 = ceil($totalRows_R15/$maxRows_R15)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Mostrar Suministros</title>


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

<div align="center">
                    <h1 class="page-header">Mostrar Suministro</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">

<form id="form1" name="form1" method="post" action="">
  <table border="1" class="table table-striped table-bordered table-hover" >
    <tr>
      <td>IdSuministro</td>
      <td>Nombre</td>
      <td>Caracteristicas</td>
      <td>Estado</td>
      <td>TipoSuministro</td>
      <td>IdSucursal</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R15['IdSuministro']; ?></td>
        <td><?php echo $row_R15['Nombre']; ?></td>
        <td><?php echo $row_R15['Caracteristicas']; ?></td>
        <td><?php echo $row_R15['Estado']; ?></td>
        <td><?php echo $row_R15['TipoSuministro']; ?></td>
        <td><?php echo $row_R15['IdSucursal']; ?></td>
      </tr>
      <?php } while ($row_R15 = mysql_fetch_assoc($R15)); ?>
  </table>
</form>
</div>
</div>

</body>
</html>
<?php
mysql_free_result($R15);
?>
