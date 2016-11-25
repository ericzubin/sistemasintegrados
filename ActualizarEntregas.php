<?php
include('conectadb.php');

if ( array_key_exists("ActualizarEntrega", $_POST) ) {

$IdEntrega=$_POST['IdEntrega'];
$Fecha=$_POST['Fecha'];
$Status=$_POST['Status'];
$Observaciones=$_POST['Observaciones'];
$NombreReceptor=$_POST['NombreReceptor'];
$Con=Conectar();
$Query="UPDATE logentregas
SET Fecha='".$Fecha."',Status='".$Status."',Observaciones='".$Observaciones."',NombreReceptor='".$NombreReceptor."' WHERE IdEntrega=".$IdEntrega;
  header("Location: ConsultaLogEntregas.php");
//echo "Se realiza correctamente la actualizacion";
Ejecutar($Query,$Con);
Desconectar($Con);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar Entregas</title>


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
                    <h1 class="page-header">Actualizar Entrega</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdEntrega:</td>
            <td><input class="form-control" type="text" name="IdEntrega" value="<?php echo $_GET['Id']; ?>" size="32"></td>

    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha:</td>
       <td><input class="form-control" type="text" name="Fecha" value="<?php echo $_GET['Fecha']; ?>" size="32"></td>

    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
             <td><input class="form-control" type="text" name="Status" value="<?php echo $_GET['Status']; ?>" size="32"></td>

    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Observaciones:</td>
            <td><input class="form-control" type="text" name="Observaciones" value="<?php echo $_GET['Observaciones']; ?>" size="32"></td>

    </tr>
    <tr valign="baseline">
      <td nowrap align="right">NombreReceptor:</td>
              <td><input class="form-control" type="text" name="NombreReceptor" value="<?php echo $_GET['NombreReceptor']; ?>" size="32"></td>

    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input  class="btn btn-default" type="submit" name="ActualizarEntrega" value="ActualizarEntrega"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
