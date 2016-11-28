<?php




include('conectadb.php');

if ( array_key_exists("Actualizar", $_POST) ) {

$IdPermiso=$_POST['IdPermiso'];
$TipoPermiso=$_POST['TipoPermiso'];
$Status=$_POST['Status'];
$FechaOtorgacion=$_POST['FechaOtorgacion'];
$FechaVencimiento=$_POST['FechaVencimiento'];

$Con=Conectar();
$Query="UPDATE syspermisos
SET TipoPermiso='".$TipoPermiso."',Status=".$Status.",FechaOtorgacion='".$FechaOtorgacion."',FechaVencimiento='".$FechaVencimiento."WHERE IdEnvio=".$IdPermiso;

Ejecutar($Query,$Con);
header("Location: ConsultaLogEnvios.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Actualizar Permiso</title>

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
                    <h1 class="page-header">Actualizar Permisos</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdPermiso:</td>
      <td><input class="form-control" type="text" name="IdPermiso" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">TipoPermiso:</td>
      <td><input class="form-control" type="text" name="TipoPermiso" value="<?php echo $_GET['TipoPermiso']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control"  type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaOtorgacion:</td>
      <td><input class="form-control" type="text" name="FechaOtorgacion" value="<?php echo $_GET['FechaOtorgacion']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaVencimiento:</td>
      <td><input class="form-control" type="text" name="FechaVencimiento" value="<?php echo $_GET['FechaVencimiento']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" class="btn btn-default"  value="Actualizar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>