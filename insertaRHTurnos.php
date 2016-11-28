<?php
if ( array_key_exists("Insertar", $_POST) ) {
$IdTurno=$_POST['IdTurno'];
$Nombre=$_POST['Nombre'];
$HoraEntrada=$_POST['HoraEntrada'];
$HoraSalida=$_POST['HoraSalida'];
$DiasLaborales=$_POST['DiasLaborales'];
$TipoJornada=$_POST['TipoJornada'];
$Status=$_POST['Status'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhturnos VALUES (NULL, '$Nombre','$HoraEntrada','$HoraSalida','$DiasLaborales','$TipoJornada','$Status')";
Ejecutar($Query,$Con);


Desconectar($Con);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insertar Turno</title>

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
                    <h1 class="page-header">Insertar Turno</h1>
</div>


<form id="form1" name="form1" method="post" action="">
 </form>
 
 <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
   <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdSuministro:</td>
      
      <td><input class="form-control" type="text" name="IdSuministro" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      
      <td><input class="form-control" type="text" name="Nombre" value="" size="32"></td>
    </tr>
     <tr valign="baseline">
       <td nowrap align="right">HoraEntrada:</td>
      
      <td><input  class="form-control" type="text" name="HoraEntrada" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">HoraSalida:</td>
      
      <td><input class="form-control" type="text" name="HoraSalida" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      
      
      <td nowrap align="right">DiasLaborales:</td>
      <td><input class="form-control" type="text" name="DiasLaborales" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
     
      
      <td nowrap align="right">TipoJornada:</td>
      <td><input class="form-control" type="text" name="TipoJornada" value="" size="32"></td>
     </tr>

       
      <td nowrap align="right">Status::</td>
      <td><input class="form-control" type="text" name="Status" value="" size="32"></td>
     </tr>

     <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      
      <td><input class="btn btn-default" type="submit" value="Insertar" name="Insertar"></td>
     </tr>
   </table>
   <input type="hidden" name="MM_insert" value="form2">