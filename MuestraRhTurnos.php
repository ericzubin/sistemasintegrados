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

$maxRows_R22 = 10;
$pageNum_R22 = 0;
if (isset($_GET['pageNum_R22'])) {
  $pageNum_R22 = $_GET['pageNum_R22'];
}
$startRow_R22 = $pageNum_R22 * $maxRows_R22;

mysql_select_db($database_localhost, $localhost);
$query_R22 = "SELECT * FROM rhturnos";
$query_limit_R22 = sprintf("%s LIMIT %d, %d", $query_R22, $startRow_R22, $maxRows_R22);
$R22 = mysql_query($query_limit_R22, $localhost) or die(mysql_error());
$row_R22 = mysql_fetch_assoc($R22);

if (isset($_GET['totalRows_R22'])) {
  $totalRows_R22 = $_GET['totalRows_R22'];
} else {
  $all_R22 = mysql_query($query_R22);
  $totalRows_R22 = mysql_num_rows($all_R22);
}
$totalPages_R22 = ceil($totalRows_R22/$maxRows_R22)-1;
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
      <td>IdTurno</td>
      <td>Nombre</td>
      <td>HoraEntrada</td>
      <td>HoraSalida</td>
      <td>DiasLaborales</td>
      <td>TipoJornada</td>
      <td>Status</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R22['IdTurno']; ?></td>
        <td><?php echo $row_R22['Nombre']; ?></td>
        <td><?php echo $row_R22['HoraEntrada']; ?></td>
        <td><?php echo $row_R22['HoraSalida']; ?></td>
        <td><?php echo $row_R22['DiasLaborales']; ?></td>
        <td><?php echo $row_R22['TipoJornada']; ?></td>
        <td><?php echo $row_R22['Status']; ?></td>
      </tr>
      <?php } while ($row_R22 = mysql_fetch_assoc($R22)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R22);
?>
