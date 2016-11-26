<?php
include('conectadb.php');

if ( array_key_exists("Actualizar", $_POST) ) {

$IdFormaEnvio=$_POST['IdFormaEnvio'];
$Nombre=$_POST['Nombre'];
$Status=$_POST['Status'];
$Observacion=$_POST['Observacion'];
$Con=Conectar();
$Query="UPDATE logformasdeenvio
SET Observacion='".$Observacion."',Status='".$Status."',Nombre='".$Nombre."' WHERE IdFormaEnvio=".$IdFormaEnvio;
echo $Query;
Ejecutar($Query,$Con);
Desconectar($Con);
header("Location: ConsultaLogFormasDeEnvio.php");

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Forma De Envio</title>


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
                    <h1 class="page-header">Actualizar Forma de Envio</h1>
</div>

<body>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdFormaEnvio:</td>
      <td><input class="form-control  type="text" name="IdFormaEnvio" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Observacion:</td>
      <td><input class="form-control type="text" name="Observacion" value="<?php echo $_GET['Observacion']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input  class="btn btn-default"  type="submit" name="Actualizar" value="Actualizar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
