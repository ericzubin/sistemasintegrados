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

$maxRows_R13 = 10;
$pageNum_R13 = 0;
if (isset($_GET['pageNum_R13'])) {
  $pageNum_R13 = $_GET['pageNum_R13'];
}
$startRow_R13 = $pageNum_R13 * $maxRows_R13;

mysql_select_db($database_localhost, $localhost);
$query_R13 = "SELECT * FROM invnominas";
$query_limit_R13 = sprintf("%s LIMIT %d, %d", $query_R13, $startRow_R13, $maxRows_R13);
$R13 = mysql_query($query_limit_R13, $localhost) or die(mysql_error());
$row_R13 = mysql_fetch_assoc($R13);

if (isset($_GET['totalRows_R13'])) {
  $totalRows_R13 = $_GET['totalRows_R13'];
} else {
  $all_R13 = mysql_query($query_R13);
  $totalRows_R13 = mysql_num_rows($all_R13);
}
$totalPages_R13 = ceil($totalRows_R13/$maxRows_R13)-1;
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
      <td>IdNomina</td>
      <td>Monto</td>
      <td>FechaPago</td>
      <td>MotivoPago</td>
      <td>Dias</td>
      <td>Status</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_R13['IdNomina']; ?></td>
        <td><?php echo $row_R13['Monto']; ?></td>
        <td><?php echo $row_R13['FechaPago']; ?></td>
        <td><?php echo $row_R13['MotivoPago']; ?></td>
        <td><?php echo $row_R13['Dias']; ?></td>
        <td><?php echo $row_R13['Status']; ?></td>
      </tr>
      <?php } while ($row_R13 = mysql_fetch_assoc($R13)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($R13);
?>
