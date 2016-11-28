<?php  ?>
<?php

include('conectadb.php');
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
      $Con=Conectar();
      $sql= "INSERT INTO invnominas VALUES(".$_POST['Idcampo'].",".$_POST['campo1'].",'".$_POST['campo2']."','".$_POST['campo3']."',".$_POST['campo4'].",".$_POST['campo5'].");";
      Ejecutar($sql,$Con);
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insertar Suministro</title>

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
                    <h1 class="page-header">Insertar Nomina</h1>
</div>


<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdNomima:</td>
      <td><input class="form-control" type="text" name="Idcampo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Monto:</td>
      <td><input class="form-control" type="text" name="campo1" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha Pago:</td>
      <td><input  class="form-control" type="date" name="campo2" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Motivo Pagos:</td>
      <td><input class="form-control" type="text" name="campo3" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Dias:</td>
      <td><input class="form-control" type="text" name="campo4" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="campo5" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-default" type="submit" value="Insertar Forma de pago"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
