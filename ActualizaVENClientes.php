<?php
include('conectadb.php');

if ( array_key_exists("Actualizar", $_POST) ) {

$IdCliente=$_POST['IdCliente'];
$Nombre=$_POST['Nombre'];
$DomicilioFiscal=$_POST['DomicilioFiscal'];
$DomicilioParticular=$_POST['DomicilioParticular'];
$Telefono=$_POST['Telefono'];
$RFC=$_POST['RFC'];
$Status=$_POST['Status'];
$Correo=$_POST['Correo'];


$Con=Conectar();
$Query="UPDATE rhempleados
SET Nombre='".$Nombre."',DomicilioFiscal='".$DomicilioFiscal."',DomicilioParticular='".$DomicilioParticular."',RFC='".$RFC.
"',FechaContratacion='".$FechaContratacion.
"',Telefono='".$Telefono.
"',Correo='".$Correo.
"',Status='".$Status.
"' WHERE IdCliente=".$IdCliente;
Ejecutar($Query,$Con);
Desconectar($Con);

  header("Location: ConsultaLogEntregas.php");

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Cliente</title>


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
                    <h1 class="page-header">Insertar Cliente</h1>
</div>

<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdCliente:</td>
      <td><input class="form-control" type="text" name="IdCliente" value="<?php echo $_GET['Id']; ?>" size="32"></td>
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
      <td><input class="form-control" type="text" name="Telefono" value="<?php echo $_GET['Telefono']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Correo:</td>
      <td><input class="form-control"  type="text" name="Correo" value="<?php echo $_GET['Correo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
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
