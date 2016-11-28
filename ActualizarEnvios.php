<?php




include('conectadb.php');

if ( array_key_exists("ActualizarEnvio", $_POST) ) {

$IdEnvio=$_POST['IdEnvio'];
$Fecha=$_POST['Fecha'];
$Status=$_POST['Status'];
$Observaciones=$_POST['Observaciones'];
$DomicilioEntrega=$_POST['DomicilioEntrega'];
$IdFormaEnvio=$_POST['IdFormaEnvio'];
$IdEntrega=$_POST['IdEntrega'];
$IdVenta=$_POST['IdVenta'];

$Con=Conectar();
$Query="UPDATE logenvios
SET Fecha='".$Fecha."',Status=".$Status.",Observaciones='".$Observaciones."',DomicilioEntrega='".$DomicilioEntrega."',IdFormaEnvio=".$IdFormaEnvio."IdEntrega=".$IdEntrega."IdVenta=".$IdVenta." WHERE IdEnvio=".$IdEnvio;

Ejecutar($Query,$Con);
header("Location: ConsultaSysTiposCuentas.php");
}

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Envios</title>


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
                    <h1 class="page-header">Actualizar Envios</h1>
</div>

<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdEnvio:</td>
      <td><input class="form-control  type="text" name="IdEnvio" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha:</td>
      <td><input class="form-control  type="text" name="Fecha" value="<?php echo $_GET['Fecha']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control  type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Observaciones:</td>
      <td><input class="form-control  type="text" name="Observaciones" value="<?php echo $_GET['Observaciones']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">DomicilioEntrega:</td>
      <td><input class="form-control  type="text" name="DomicilioEntrega" value="<?php echo $_GET['DomicilioEntrega']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdFormaEnvio:</td>
      <td><input class="form-control  type="text" name="IdFormaEnvio" value="<?php echo $_GET['IdFormaEnvio']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdEntrega:</td>
      <td><input class="form-control  type="text" name="IdEntrega" value="<?php echo $_GET['IdEntrega']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdVenta:</td>
      <td><input class="form-control  type="text" name="IdVenta" value="<?php echo $_GET['IdVenta']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input  class="btn btn-default" type="submit" value="ActualizarEnvio" name="ActualizarEnvio"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
