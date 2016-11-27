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
  $insertSQL = sprintf("INSERT INTO comdetallecompras (IdDetalleCompra, IdCompra, IdProducto, PrecioUnitario, Cantidad, Descuento) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdDetalleCompra'], "int"),
                       GetSQLValueString($_POST['IdCompra'], "int"),
                       GetSQLValueString($_POST['IdProducto'], "int"),
                       GetSQLValueString($_POST['PrecioUnitario'], "double"),
                       GetSQLValueString($_POST['Cantidad'], "int"),
                       GetSQLValueString($_POST['Descuento'], "double"));

  mysql_select_db($database_Con1, $Con1);
  $Result1 = mysql_query($insertSQL, $Con1) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Detalle Compras</title>
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
                    <h1 class="page-header">Insertar Detalle Compras</h1>
</div>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdDetalleCompra:</td>
      <td><input class="form-control" type="text" name="IdDetalleCompra" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCompra:</td>
      <td><input class="form-control" type="text" name="IdCompra" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdProducto:</td>
      <td><input class="form-control" type="text" name="IdProducto" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioUnitario:</td>
      <td><input class="form-control" type="text" name="PrecioUnitario" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cantidad:</td>
      <td><input class="form-control" type="text" name="Cantidad" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descuento:</td>
      <td><input class="form-control" type="text" name="Descuento" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Insertar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
