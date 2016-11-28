<?php  ?>
<?php

include('conectadb.php');
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
      $Con=Conectar();
      $sql= "INSERT INTO invproductos VALUES(".$_POST['Idcampo'].",'".$_POST['campo1']."','".$_POST['campo2']."','".$_POST['campo3']."',".$_POST['campo4'].",'".$_POST['campo5']."','".$_POST['campo6']."',".$_POST['campo7'].",".$_POST['campo8'].",".$_POST['campo9'].",".$_POST['campo10'].");";
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
                    <h1 class="page-header">Insertar Productos</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdProducto:</td>
      <td><input class="form-control" type="text" name="Idcampo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="campo1" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Marca:</td>
      <td><input  class="form-control" type="date" name="campo2" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descripcion:</td>
      <td><input class="form-control" type="text" name="campo3" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Existencias:</td>
      <td><input class="form-control" type="text" name="campo4" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Unidad Medicional:</td>
      <td><input class="form-control" type="text" name="campo5" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">categoria:</td>
      <td><input class="form-control" type="text" name="campo6" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioCompra:</td>
      <td><input class="form-control" type="text" name="campo7" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioVenta:</td>
      <td><input class="form-control" type="text" name="campo8" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descuento:</td>
      <td><input class="form-control" type="text" name="campo9" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">impuesto decimal:</td>
      <td><input class="form-control" type="text" name="campo10" value="" size="32"></td>
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
