<?php
include('conectadb.php');

if ( array_key_exists("ActualizarDepartamento", $_POST) ) {
  $Con=Conectar();
  $sql= "UPDATE invactivosfijos set IdActivo=".$_POST['IdActivo'].",Nombre='".$_POST['Nombre']."',Caracteristicas='".$_POST['Caracteristicas']."',Estado='".$_POST['Estado']."',TipoActivo='".$_POST['TipoActivo']."',IdSucursal=".$_POST['IdSucursal']." where  IdActivo=".$_POST['IdActivo'].";";
  echo $sql;
  Ejecutar($sql,$Con);

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Activos fijos</title>


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
                    <h1 class="page-header">Acualizar invactivos fijos</h1>
</div>



<form method="post" name="form1" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">idFormaPago:</td>
      <td><input class="form-control type="text" name="IdActivo" value="<?php echo $_GET['IdActivo']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Caracteristicas" value="<?php echo $_GET['Caracteristicas']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Estado" value="<?php echo $_GET['Estado']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Idventa:</td>
      <td><input class="form-control type="text" name="TipoActivo" value="<?php echo $_GET['TipoActivo']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCompra:</td>
      <td><input class="form-control type="text" name="IdSucursal" value="<?php echo $_GET['IdSucursal']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="ActualizarDepartamento" name="ActualizarDepartamento"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
