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
  $insertSQL = sprintf("INSERT INTO invproductos (IdProducto, Nombre, Marca, Descripcion, Existencia, UnidadMedicion, Categoria, PrecioCompra, PrecioVenta, Descuento, ImpuestoEspecial) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdProducto'], "int"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Marca'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['Existencia'], "int"),
                       GetSQLValueString($_POST['UnidadMedicion'], "text"),
                       GetSQLValueString($_POST['Categoria'], "text"),
                       GetSQLValueString($_POST['PrecioCompra'], "double"),
                       GetSQLValueString($_POST['PrecioVenta'], "double"),
                       GetSQLValueString($_POST['Descuento'], "double"),
                       GetSQLValueString($_POST['ImpuestoEspecial'], "double"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitle</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdProducto:</td>
      <td><input type="text" name="IdProducto" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input type="text" name="Nombre" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Marca:</td>
      <td><input type="text" name="Marca" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descripcion:</td>
      <td><input type="text" name="Descripcion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Existencia:</td>
      <td><input type="text" name="Existencia" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">UnidadMedicion:</td>
      <td><input type="text" name="UnidadMedicion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Categoria:</td>
      <td><input type="text" name="Categoria" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioCompra:</td>
      <td><input type="text" name="PrecioCompra" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioVenta:</td>
      <td><input type="text" name="PrecioVenta" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descuento:</td>
      <td><input type="text" name="Descuento" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ImpuestoEspecial:</td>
      <td><input type="text" name="ImpuestoEspecial" value="" size="32"></td>
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
