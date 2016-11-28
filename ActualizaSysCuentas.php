<?php

  require_once('funciones/sesiones.php'); 
  validaSesion();
  $TipoUser=obtenerTipoUsuario();
  if($TipoUser=="Admin")
  {

  }else
  {
      header("Location: login.html");
  }
   
?>
<?php


include('conectadb.php');

if ( array_key_exists("Actualiza", $_POST) ) {

$IdCuenta=$_POST['IdCuenta'];
$Password=$_POST['Password'];
$TipoCuenta=$_POST['TipoCuenta'];
$Intentos=$_POST['Intentos'];
$Status=$_POST['Status'];
$FechaUltimoAcceso=$_POST['FechaUltimoAcceso'];
$IdTipo=$_POST['IdTipo'];

$Con=Conectar();
$Query="UPDATE syscuentas
SET Password='".$Password."',TipoCuenta='".$TipoCuenta."',Intentos='".$Intentos."',Status=".$Status.",FechaUltimoAcceso='".$FechaUltimoAcceso."',IdTipo=".$IdTipo." WHERE IdCuenta=".$IdCuenta;

Ejecutar($Query,$Con);
header("Location: ConsultaLogEnvios.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar Cuenta</title>
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
                    <h1 class="page-header">Insertar Cuentas </h1>
</div>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdCuenta:</td>
      <td><input class="form-control" type="text" name="IdCuenta" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Password:</td>
      <td><input class="form-control" type="text" name="Password" value="<?php echo $_GET['Password']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">TipoCuenta:</td>
      <td><input class="form-control"  type="text" name="TipoCuenta" value="<?php echo $_GET['TipoCuenta']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Intentos:</td>
      <td><input class="form-control" type="text" name="Intentos" value="<?php echo $_GET['Intentos']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaUltimoAcceso:</td>
      <td><input class="form-control" type="text" name="FechaUltimoAcceso" value="<?php echo $_GET['FechaUltimoAcceso']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdTipo:</td>
      <td><input class="form-control" type="text" name="IdTipo" value="<?php echo $_GET['IdTipo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="form-control"  type="submit" value="Actualiza"></td>
    </tr>
  </table>
  <input type="hidden" class="btn btn-default"   name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
