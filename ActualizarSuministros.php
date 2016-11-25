<?php

$idPuesto=$_GET['idPuesto'];
$Nombre=$_GET['Nombre'];
$Status=$_GET['Status'];
$Descripcion=$_GET['Descripcion'];
$Nivel=$_GET['Nivel'];
$PersonalRequerido=$_GET['PersonalRequerido'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhpuestos VALUES ('', '$Nombre','$Status','$Descripcion','$Nivel','$PersonalRequerido')";
Ejecutar($Query,$Con);


Desconectar($Con);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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










<div align="center">
                    <h1 class="page-header">Actualizar Suministro</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdSuministro:</td>
      <td><input class="form-control" type="text" name="IdSuministro" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Caracteristicas:</td>
      <td><input  class="form-control" type="text" name="Caracteristicas" value="<?php echo $_GET['Caracteristicas']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Estado:</td>
      <td><input class="form-control" type="text" name="Estado" value="<?php echo $_GET['Estado']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo Suministro:</td>
      <td><input class="form-control" type="text" name="TipoSuministro" value="<?php echo $_GET['TipoSuministro']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Id Sucursal:</td>
      <td><input class="form-control" type="text" name="IdSucursal" value="<?php echo $_GET['IdSucursal']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Insertar Suministro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>




</body>
</html>