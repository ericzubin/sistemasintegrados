<?php
include('conectadb.php');
if ( array_key_exists("ActualizarCuentaPorPagar", $_POST) ) {



$IdDetalleVenta = $_POST['IdDetalleVenta'];
$IdVenta = $_POST['IdVenta'];
$IdProducto = $_POST['IdProducto'];
$PrecioUnitario = $_POST['PrecioUnitario'];
$Cantidad = $_POST['Cantidad'];
$Descuento = $_POST['Descuento'];
$Con=Conectar();
$Query="UPDATE vendetalleventas
SET IdVenta='".$IdVenta."',IdProducto='".$IdProducto."',PrecioUnitario='".$PrecioUnitario."',Cantidad='".$Descuento."',Tasa='".$Descuento."',IdCompra='".$IdCompra."' WHERE IdDetalleVenta=".$IdDetalleVenta;

Ejecutar($Query,$Con);
Desconectar($Con);
header("Location: ConsultaVenDetalleVentas.php");
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Actualizar Detalle Ventas</title>

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
                    <h1 class="page-header">Insertar Detalle Ventas</h1>
</div>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdDetalleVenta:</td>
      <td><input class="form-control" type="text" name="IdDetalleVenta" value="<?php echo $_GET['id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdVenta:</td>
      <td><input class="form-control" type="text" name="IdVenta" value="<?php echo $_GET['IdVenta']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdProducto:</td>
      <td><input class="form-control" type="text" name="IdProducto" value="<?php echo $_GET['IdProducto']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioUnitario:</td>
      <td><input class="form-control" type="text" name="PrecioUnitario" value="<?php echo $_GET['PrecioUnitario']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cantidad:</td>
      <td><input class="form-control" type="text" name="Cantidad" value="<?php echo $_GET['Cantidad']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descuento:</td>
      <td><input class="form-control" type="text" name="Descuento" value="<?php echo $_GET['Descuento']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Actualizar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
