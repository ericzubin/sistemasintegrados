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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO invnominas (IdNomina, Monto, FechaPago, MotivoPago, Dias, Status) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdNomina'], "int"),
                       GetSQLValueString($_POST['Monto'], "double"),
                       GetSQLValueString($_POST['FechaPago'], "date"),
                       GetSQLValueString($_POST['MotivoPago'], "text"),
                       GetSQLValueString($_POST['Dias'], "int"),
                       GetSQLValueString($_POST['Status'], "int"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdNomina:</td>
      <td><input type="text" name="IdNomina" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Monto:</td>
      <td><input type="text" name="Monto" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaPago:</td>
      <td><input type="text" name="FechaPago" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">MotivoPago:</td>
      <td><input type="text" name="MotivoPago" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Dias:</td>
      <td><input type="text" name="Dias" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input type="text" name="Status" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
