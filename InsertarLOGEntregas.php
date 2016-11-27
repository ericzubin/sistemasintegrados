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
  $insertSQL = sprintf("INSERT INTO logentregas (IdEntrega, Fecha, Status, Observaciones, NombreReceptor) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['IdEntrega'], "int"),
                       GetSQLValueString($_POST['Fecha'], "date"),
                       GetSQLValueString($_POST['Status'], "int"),
                       GetSQLValueString($_POST['Observaciones'], "text"),
                       GetSQLValueString($_POST['NombreReceptor'], "text"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Entregas</title>


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
                    <h1 class="page-header">Insertar Entrega</h1>
</div>

                        <div class="">

<form id="form1" role="" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdEntrega:</td>
      <td><input class="form-control  type="text" name="IdEntrega" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha:</td>
      <td><input class="form-control type="data" name="Fecha" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Status" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Observaciones:</td>
      <td><input class="form-control type="text" name="Observaciones" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">NombreReceptor:</td>
      <td><input class="form-control type="text" name="NombreReceptor" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input  class="btn btn-default" type="submit" value="Insertar Entrega"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
</div>

<p>&nbsp;</p>
</body>
</html>
