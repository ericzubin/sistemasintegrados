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
if ( array_key_exists("InsertarSuministro", $_POST) ) {
$idPuesto=$_POST['idSurcusal'];
$Nombre=$_POST['Nombre'];
$localizacion=$_POST['localizacion'];
$Status=$_POST['Status'];
$Telefono=$_POST['Telefono'];
$DomicilioFiscal=$_POST['DomicilioFiscal'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO rhsucursales VALUES ('', '$Nombre','$localizacion','$Status','$Telefono','$DomicilioFiscal')";
Ejecutar($Query,$Con);


Desconectar($Con);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insertar Cuentas</title>

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
                    <h1 class="page-header">Insertar Cuentas</h1>
</div>


<form id="form1" name="form1" method="post" action="">
 </form>
 
 <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
   <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdCuenta:</td>
      
      <td><input class="form-control" type="text" name="IdSuministro" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Password:</td>
      
      <td><input class="form-control" type="text" name="Nombre" value="" size="32"></td>
    </tr>
     <tr valign="baseline">
       <td nowrap align="right">Tipo Cuenta:</td>
      
      <td><input  class="form-control" type="text" name="Caracteristicas" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Intentos:</td>
      
      <td><input class="form-control" type="text" name="Estado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      
      
      <td nowrap align="right">Status:</td>
      <td><input class="form-control" type="text" name="TipoSuministro" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
     
      
      <td nowrap align="right">Fecha de Ultimo Acceso:</td>
      <td><input class="form-control" type="text" name="IdSucursal" value="" size="32"></td>
     </tr>
     <tr valign="baseline">


     <td nowrap align="right">Id Tipo:</td>
      <td><input class="form-control" type="text" name="IdSucursal" value="" size="32"></td>
     </tr>
     <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      
      <td><input class="btn btn-default" type="submit" value="InsertarSuministro" name="InsertarSuministro"></td>
     </tr>
   </table>
   <input type="hidden" name="MM_insert" value="form2">