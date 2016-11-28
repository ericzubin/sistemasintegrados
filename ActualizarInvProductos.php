<?php
include('conectadb.php');

if ( array_key_exists("ActualizarDepartamento", $_POST) ) {
  $Con=Conectar();
  $sql= "UPDATE invproductos set IdProducto=".$_POST['IdProducto'].",Nombre='".$_POST['Nombre']."',Marca='".$_POST['Marca']."',Descripcion='".$_POST['Descripcion']."',Existencia=".$_POST['Existencia'].",Categoria='".$_POST['Categoria']."',PrecioCompra=".$_POST['PrecioCompra'].",PrecioVenta=".$_POST['PrecioVenta'].",Descuento=".$_POST['Descuento'].",ImpuestoEspecial=".$_POST['ImpuestoEspecial']." where  IdProducto=".$_POST['IdProducto'].";";
  echo $sql;
  Ejecutar($sql,$Con);

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Producto</title>


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
                    <h1 class="page-header">Actualizar Producto</h1>
</div>



<form method="post" name="form1" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdProducto:</td>
      <td><input class="form-control type="text" name="IdProducto" value="<?php echo $_GET['IdProducto']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Marca:</td>
      <td><input class="form-control type="text" name="Marca" value="<?php echo $_GET['Marca']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descripcion:</td>
      <td><input class="form-control type="text" name="Descripcion" value="<?php echo $_GET['Descripcion']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Existencia:</td>
      <td><input class="form-control type="text" name="Existencia" value="<?php echo $_GET['Existencia']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">UnidadMedicion:</td>
      <td><input class="form-control type="text" name="UnidadMedicion" value="<?php echo $_GET['UnidadMedicion']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Categoria:</td>
      <td><input class="form-control type="text" name="Categoria" value="<?php echo $_GET['Categoria']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioCompra:</td>
      <td><input class="form-control type="text" name="PrecioCompra" value="<?php echo $_GET['PrecioCompra']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrecioVenta:</td>
      <td><input class="form-control type="text" name="PrecioVenta" value="<?php echo $_GET['PrecioVenta']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Descuento:</td>
      <td><input class="form-control type="text" name="Descuento" value="<?php echo $_GET['Descuento']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">ImpuestoEspecial:</td>
      <td><input class="form-control type="text" name="ImpuestoEspecial" value="<?php echo $_GET['ImpuestoEspecial']; ?>"  size="32"></td>
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
