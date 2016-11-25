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

$maxRows_R16 = 10;
$pageNum_R16 = 0;
if (isset($_GET['pageNum_R16'])) {
  $pageNum_R16 = $_GET['pageNum_R16'];
}
$startRow_R16 = $pageNum_R16 * $maxRows_R16;

mysql_select_db($database_localhost, $localhost);
$query_R16 = "SELECT * FROM logentregas";
$query_limit_R16 = sprintf("%s LIMIT %d, %d", $query_R16, $startRow_R16, $maxRows_R16);
$R16 = mysql_query($query_limit_R16, $localhost) or die(mysql_error());
$row_R16 = mysql_fetch_assoc($R16);

if (isset($_GET['totalRows_R16'])) {
  $totalRows_R16 = $_GET['totalRows_R16'];
} else {
  $all_R16 = mysql_query($query_R16);
  $totalRows_R16 = mysql_num_rows($all_R16);
}
$totalPages_R16 = ceil($totalRows_R16/$maxRows_R16)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mostrar Entregas</title>


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
                    <h1 class="page-header">Mostrar entregas</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<form id="form1" name="form1" method="post" action=""  >
  <table border="1" class="table table-striped table-bordered table-hover">
    <tr>
      <td>IdEntrega</td>
      <td>Fecha</td>
      <td>Status</td>
      <td>Observaciones</td>
      <td>NombreReceptor</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R16['IdEntrega']; ?></td>
        <td><?php echo $row_R16['Fecha']; ?></td>
        <td><?php echo $row_R16['Status']; ?></td>
        <td><?php echo $row_R16['Observaciones']; ?></td>
        <td><?php echo $row_R16['NombreReceptor']; ?></td>
      </tr>
      <?php } while ($row_R16 = mysql_fetch_assoc($R16)); ?>
  </table>
</form>

</div>
</div>

</body>
</html>
<?php
mysql_free_result($R16);
?>
