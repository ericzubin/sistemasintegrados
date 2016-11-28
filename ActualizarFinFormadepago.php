<?php
include('conectadb.php');

if ( array_key_exists("ActualizarDepartamento", $_POST) ) {
  $Con=Conectar();
  $sql= "UPDATE finformasdepago set idFormaPago=".$_POST['IdFormaPago'].",Nombre='".$_POST['Nombre']."',Status=".$_POST['Status'].",Observacion='".$_POST['Observaciones']."',IdVenta=".$_POST['Idventa'].",IdCompra=".$_POST['IdCompra']." where  idFormaPago=".$_POST['IdFormaPago'].";";
  echo $sql;
  Ejecutar($sql,$Con);

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Forma De Pago</title>


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
                    <h1 class="page-header">Actualizar Formas de Pago</h1>
</div>



<form method="post" name="form1" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">idFormaPago:</td>
      <td><input class="form-control type="text" name="IdFormaPago" value="<?php echo $_GET['IdFormadepago']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input class="form-control type="text" name="Nombre" value="<?php echo $_GET['Nombre']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Status" value="<?php echo $_GET['Status']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Observaciones" value="<?php echo $_GET['Observaciones']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Idventa:</td>
      <td><input class="form-control type="text" name="Idventa" value="<?php echo $_GET['IdVenta']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdCompra:</td>
      <td><input class="form-control type="text" name="IdCompra" value="<?php echo $_GET['IdCompra']; ?>"  size="32"></td>
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
