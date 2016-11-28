<?php  ?>
<?php

include('conectadb.php');
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
      $Con=Conectar();
      $sql= "INSERT INTO finformasdepago VALUES(".$_POST['IdFormadepago'].",'".$_POST['nombre']."',".$_POST['status'].",'".$_POST['observaciones']."',".$_POST['Idventa'].",".$_POST['IdSucursales'].");";
      Ejecutar($sql,$Con);
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insertar Suministro</title>

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
                    <h1 class="page-header">Insertar Forma de Pago</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdFormadePago:</td>
      <td><input class="form-control" type="text" name="IdFormadepago" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="nombre" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">status:</td>
      <td><input  class="form-control" type="text" name="status" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Observacion:</td>
      <td><input class="form-control" type="text" name="observaciones" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Id venta:</td>
      <td><input class="form-control" type="text" name="Idventa" value="null" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Id Sucursal:</td>
      <td><input class="form-control" type="text" name="IdSucursales" value="null" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Insertar Forma de pago"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
