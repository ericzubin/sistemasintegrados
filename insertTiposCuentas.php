<?php


include('conectadb.php');

if ( array_key_exists("ActualizarEnvio", $_POST) ) {

$IdTipo=$_POST['IdTipo'];
$Nombre=$_POST['Nombre'];
$Status=$_POST['Status'];
$IdPermiso=$_POST['IdPermiso'];

$Con=Conectar();
$Query="UPDATE systiposcuentas
SET Nombre='".$Nombre."',Status=".$Status.",IdPermiso='".$IdPermiso." WHERE IdTipo=".$IdTipo;

Ejecutar($Query,$Con);
header("Location: ConsultaLogEnvios.php");
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
      <td nowrap align="right">IdTipo:</td>
      <td><input class="form-control"  type="text" name="IdTipo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control"  type="text" name="Nombre" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control"  type="text" name="Status" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdPermiso:</td>
      <td><input class="form-control"  type="text" name="IdPermiso" value="" size="32"></td>
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
