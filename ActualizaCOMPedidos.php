<?php
include('conectadb.php');
if ( array_key_exists("ActualizarPedidos", $_POST) ) {


$IdPedido = $_POST['id'];
$Fecha = $_POST['Fecha'];
$Status = $_POST['Status'];
$IdProveedor = $_POST['IdProveedor'];
$IdProducto = $_POST['IdProducto'];
$Con=Conectar();
$Query="UPDATE compedidos
SET Fecha='".$Fecha."',Status='".$Status."',IdProveedor='".$IdProveedor."',IdProducto='".$IdProducto."' WHERE IdPedido=".$IdPedido;

Ejecutar($Query,$Con);
Desconectar($Con);
header("Location: ConsultaCOMPedidos.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Actualizar Pedidos</title>

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
                    <h1 class="page-header">Actualizar Pedidos</h1>
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
      <td nowrap align="right">Fecha:</td>
      <td><input class="form-control" type="text" name="Fecha" value="<?php echo $_GET['Fecha']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdProveedor:</td>
      <td><input class="form-control" type="text" name="IdProveedor" value="<?php echo $_GET['IdProveedor']; ?>" size="32"></td>
    </tr>
      <tr valign="baseline">
      <td nowrap align="right">IdProducto:</td>
      <td><input  class="form-control" type="text" name="IdProducto" value="<?php echo $_GET['IdProducto']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Actualizar" name="ActualizarPedidos"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>




</body>
</html>