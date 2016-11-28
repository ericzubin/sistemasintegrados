<?php




include('conectadb.php');

if ( array_key_exists("ActualizarEnvio", $_POST) ) {

$IdVenta=$_POST['IdVenta'];
$Fecha=$_POST['Fecha'];
$Monto=$_POST['Monto'];
$NumeroArticulo=$_POST['NumeroArticulo'];
$Status=$_POST['Status'];
$IdFormaEnvio=$_POST['IdFormaEnvio'];
$IdCliente=$_POST['IdCliente'];
$IdIngreso=$_POST['IdIngreso'];

$Con=Conectar();
$Query="UPDATE venventas
SET Fecha='".$Fecha."',Monto=".$Monto.",NumeroArticulo='".$NumeroArticulo."',Status='".$Status."',IdFormaEnvio=".$IdFormaEnvio."IdCliente=".$IdCliente."IdVenta=".$IdVenta." WHERE IdVenta=".$IdVenta;

Ejecutar($Query,$Con);
header("Location: ConsultaLogEnvios.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insertar Ventas</title>

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
                    <h1 class="page-header">Insertar Ventas</h1>
</div>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdVenta:</td>
      <td><input class="form-control" type="text" name="IdVenta" value="<?php echo $_GET['IdVenta']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha:</td>
      <td><input class="form-control" type="text" name="Fecha" value="<?php echo $_GET['Fecha']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Monto:</td>
      <td><input class="form-control" type="text" name="Monto" value="<?php echo $_GET['Monto']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">NumeroArticulo:</td>
      <td><input class="form-control" type="text" name="NumeroArticulo" value="<?php echo $_GET['NumeroArticulo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCliente:</td>
      <td><input class="form-control" type="text" name="IdCliente" value="<?php echo $_GET['IdCliente']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdIngreso:</td>
      <td><input class="form-control"  type="text" name="IdIngreso" value="<?php echo $_GET['IdIngreso']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" class="btn btn-default" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
