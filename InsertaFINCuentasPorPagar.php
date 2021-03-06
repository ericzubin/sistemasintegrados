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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO fincuentasporpagar (IdCuentasPorPagar, Fecha, Monto, Status, Plazo, Tasa, IdCompra) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdCuentasPorPagar'], "int"),
                       GetSQLValueString($_POST['Fecha'], "date"),
                       GetSQLValueString($_POST['Monto'], "double"),
                       GetSQLValueString($_POST['Status'], "int"),
                       GetSQLValueString($_POST['Plazo'], "date"),
                       GetSQLValueString($_POST['Tasa'], "double"),
                       GetSQLValueString($_POST['IdCompra'], "int"));

  mysql_select_db($database_Con1, $Con1);
  $Result1 = mysql_query($insertSQL, $Con1) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Cuentas Por Pagar</title>
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
                    <h1 class="page-header">Insertar Cuentas Por Pagar</h1>
</div>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdCuentasPorPagar:</td>
      <td><input class="form-control" type="text" name="IdCuentasPorPagar" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha:</td>
      <td><input class="form-control" type="text" name="Fecha" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Monto:</td>
      <td><input class="form-control" type="text" name="Monto" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Plazo:</td>
      <td><input class="form-control" type="text" name="Plazo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tasa:</td>
      <td><input class="form-control" type="text" name="Tasa" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCompra:</td>
      <td><input class="form-control" type="text" name="IdCompra" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default"  type="submit" value="Insertar"></td>
    </tr>
  </table>
  <input type="hidden" class="btn btn-default" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
