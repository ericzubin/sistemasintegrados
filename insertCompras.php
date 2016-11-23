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
  $insertSQL = sprintf("INSERT INTO comcompras (IdCompra, Fecha, Monto, NumeroArticulo, Status, IdProveedor, IdEgreso, IdMetodoPago) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdCompra'], "int"),
                       GetSQLValueString($_POST['Fecha'], "date"),
                       GetSQLValueString($_POST['Monto'], "double"),
                       GetSQLValueString($_POST['NumeroArticulo'], "int"),
                       GetSQLValueString($_POST['Status'], "int"),
                       GetSQLValueString($_POST['IdProveedor'], "int"),
                       GetSQLValueString($_POST['IdEgreso'], "int"),
                       GetSQLValueString($_POST['IdMetodoPago'], "int"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());
}
?><form name="form1" method="post" action="">
</form>

    <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
      <table align="center">
        <tr valign="baseline">
          <td nowrap align="right">IdCompra:</td>
          <td><input type="text" name="IdCompra" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Fecha:</td>
          <td><input type="text" name="Fecha" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Monto:</td>
          <td><input type="text" name="Monto" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">NumeroArticulo:</td>
          <td><input type="text" name="NumeroArticulo" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Status:</td>
          <td><input type="text" name="Status" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">IdProveedor:</td>
          <td><input type="text" name="IdProveedor" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">IdEgreso:</td>
          <td><input type="text" name="IdEgreso" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">IdMetodoPago:</td>
          <td><input type="text" name="IdMetodoPago" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">&nbsp;</td>
          <td><input type="submit" value="Insert record"></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form2">
    </form>
    <p>&nbsp;</p>
