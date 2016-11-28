<?php
include('conectadb.php');
if ( array_key_exists("ActualizarProveedores", $_POST) ) {


$IdProveedor = $_POST['id'];
$Nombre = $_POST['Nombre'];
$DomicilioFiscal = $_POST['DomicilioFiscal'];
$DomicilioParticular = $_POST['DomicilioParticular'];
$RFC = $_POST['RFC'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Status = $_POST['Status'];
$Con=Conectar();
$Query="UPDATE comproveedores
SET Nombre='".$Nombre."',DomicilioFiscal='".$DomicilioFiscal."',DomicilioParticular='".$DomicilioParticular."',RFC='".$RFC."',Telefono='".$Telefono."',Correo='".$Correo."',Status='".$Status."' WHERE IdPedido=".$IdPedido;

Ejecutar($Query,$Con);
Desconectar($Con);
header("Location: ConsultaCOMProveedores.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Actualizar Proveedores</title>

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
                    <h1 class="page-header">Actualizar Proveedores</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Id:</td>
      <td><input class="form-control" type="text" name="id" value="<?php echo $_GET['id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">DomicilioFiscal:</td>
      <td><input class="form-control" type="text" name="DomicilioFiscal" value="<?php echo $_GET['DomicilioFiscal']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">DomicilioParticular:</td>
      <td><input class="form-control" type="text" name="DomicilioParticular" value="<?php echo $_GET['DomicilioParticular']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">RFC:</td>
      <td><input  class="form-control" type="text" name="RFC" value="<?php echo $_GET['RFC']; ?>" size="32"></td>
    </tr>
     <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input  class="form-control" type="text" name="Telefono" value="<?php echo $_GET['Telefono']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Correo:</td>
      <td><input class="form-control" type="text" name="Correo" value="<?php echo $_GET['Correo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Actualizar" name="ActualizarProveedores"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>



</body>
</html>