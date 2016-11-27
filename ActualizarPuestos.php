
<?php

include('conectadb.php');

if ( array_key_exists("Actualizar", $_POST) ) {

$IdPuesto=$_POST['IdPuesto'];
$Nombre=$_POST['Nombre'];
$Status=$_POST['Status'];
$Descripcion=$_POST['Descripcion'];
$Nivel=$_POST['Nivel'];
$PersonalRequerido=$_POST['PersonalRequerido'];

$Con=Conectar();
$Query="UPDATE rhpuestos
SET Nombre='".$Nombre."',Status=".$Status.",Descripcion='".$Descripcion."',Nivel=".$Nivel.",PersonalRequerido=".$PersonalRequerido." WHERE IdPuesto=".$IdPuesto;

Ejecutar($Query,$Con);
header("Location: ConsultaRHPuestos.php");

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Puestos</title>


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
                    <h1 class="page-header">Actualizar Puestos</h1>
</div>

<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdPuesto:</td>
      <td><input class="form-control" type="text" name="IdPuesto" value="<?php echo $_GET['Id']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control" type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descripcion:</td>
      <td><input class="form-control"  type="text" name="Descripcion" value="<?php echo $_GET['Descripcion']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nivel:</td>
      <td><input class="form-control" type="text" name="Nivel" value="<?php echo $_GET['Nivel']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PersonalRequerido:</td>
      <td><input class="form-control" type="text" name="PersonalRequerido" value="<?php echo $_GET['PersonalRequerido']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default"  type="submit" value="Actualizar" name="Actualizar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
