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

$maxRows_R20 = 10;
$pageNum_R20 = 0;
if (isset($_GET['pageNum_R20'])) {
  $pageNum_R20 = $_GET['pageNum_R20'];
}
$startRow_R20 = $pageNum_R20 * $maxRows_R20;

mysql_select_db($database_localhost, $localhost);
$query_R20 = "SELECT * FROM rhpuestos";
$query_limit_R20 = sprintf("%s LIMIT %d, %d", $query_R20, $startRow_R20, $maxRows_R20);
$R20 = mysql_query($query_limit_R20, $localhost) or die(mysql_error());
$row_R20 = mysql_fetch_assoc($R20);

if (isset($_GET['totalRows_R20'])) {
  $totalRows_R20 = $_GET['totalRows_R20'];
} else {
  $all_R20 = mysql_query($query_R20);
  $totalRows_R20 = mysql_num_rows($all_R20);
}
$totalPages_R20 = ceil($totalRows_R20/$maxRows_R20)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mostrar Puestos</title>


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
                    <h1 class="page-header">Mostrar Puestos</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<form id="form1" name="form1" method="post" action="">
  <table border="1" class="table table-striped table-bordered table-hover">
    <tr>
      <td>IdPuesto</td>
      <td>Nombre</td>
      <td>Status</td>
      <td>Descripcion</td>
      <td>Nivel</td>
      <td>PersonalRequerido</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R20['IdPuesto']; ?></td>
        <td><?php echo $row_R20['Nombre']; ?></td>
        <td><?php echo $row_R20['Status']; ?></td>
        <td><?php echo $row_R20['Descripcion']; ?></td>
        <td><?php echo $row_R20['Nivel']; ?></td>
        <td><?php echo $row_R20['PersonalRequerido']; ?></td>
      </tr>
      <?php } while ($row_R20 = mysql_fetch_assoc($R20)); ?>
  </table>
</form>

</div>
</div>
</body>
</html>
<?php
mysql_free_result($R20);
?>
