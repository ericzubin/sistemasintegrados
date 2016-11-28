<?php
include('conectadb.php');

if ( array_key_exists("ActualizarDepartamento", $_POST) ) {
  $Con=Conectar();
  $sql= "UPDATE invnominas set IdNomina=".$_POST['IdNomina'].",Monto=".$_POST['Monto'].",FechaPago='".$_POST['FechaPago']."',MotivoPago='".$_POST['MotivoPago']."',Dias=".$_POST['Dias'].",Status=".$_POST['Status']." where  IdNomina=".$_POST['IdNomina'].";";
  echo $sql;
  Ejecutar($sql,$Con);

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insertar nomina</title>


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
                    <h1 class="page-header">Actualizar invnominas</h1>
</div>



<form method="post" name="form1" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">idNomina:</td>
      <td><input class="form-control type="text" name="IdNomina" value="<?php echo $_GET['Id']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Monto:</td>
      <td><input class="form-control type="text" name="Monto" value="<?php echo $_GET['Monto']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">FechaPago:</td>
      <td><input class="form-control type="text" name="FechaPago" value="<?php echo $_GET['FechaPago']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">MotivoPago:</td>
      <td><input class="form-control type="text" name="MotivoPago" value="<?php echo $_GET['MotivoPago']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Dias:</td>
      <td><input class="form-control type="text" name="Dias" value="<?php echo $_GET['Dias']; ?>"  size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control type="text" name="Status" value="<?php echo $_GET['Status']; ?>"  size="32"></td>
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
