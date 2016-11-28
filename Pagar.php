
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Pagar</title>

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
    // include 'menu.php';
?>



<div align="center">
                    <h1 class="page-header">Actualizar Pedidos</h1>
</div>


<form id="form1" name="form1" method="post" action="facturas/facturas.php">
</form>

<form method="post" name="form2" action="facturas/facturas.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Cantidad:</td>
      <td><input class="form-control" type="text" name="cantidad" value="" size="32"></td>
    </tr>
     <tr valign="baseline">
      <td nowrap align="right">precioUnitario :</td>
      <td><input class="form-control" type="text" name="precioUnitario" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">producto:</td>
      <td><input class="form-control" type="text" name="producto" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">importe:</td>
      <td><input class="form-control" type="text" name="importe" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">total:</td>
      <td><input class="form-control" type="text" name="total" value="" size="32"></td>
    </tr>
      <tr valign="baseline">
      <td nowrap align="right">pago:</td>
      <td><input  class="form-control" type="text" name="pago" value="" size="32"></td>
    </tr>
     <input type="hidden" name="generar_factura" value="true"><br><br>
      <td><input class="btn btn-default" type="submit" value="Pagar" name="Pagar"></td>

  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>




</body>
</html>