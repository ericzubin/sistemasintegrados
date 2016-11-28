<?php
if ( array_key_exists("Insertar", $_POST) ) {

$IdDevolucion=$_POST['IdDevolucion'];
$Fecha=$_POST['Fecha'];
$Motivo=$_POST['Motivo'];
$Status=$_POST['Status'];
$IdVenta=$_POST['Telefono'];
$IdCompra=$_POST['IdCompra'];


include('conectadb.php');
$Con=Conectar();
$Query="INSERT INTO vendevoluciones VALUES ('', '$Fecha','$Motivo','$Status','$IdVenta','$IdCompra')";
Ejecutar($Query,$Con);


Desconectar($Con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insertar Devoluciones</title>

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
                    <h1 class="page-header">Insertar Devoluciones</h1>
</div>


<form id="form1" name="form1" method="post" action="">
 </form>
 
 <form method="post" name="form2" action="">
   <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">IdDevolucion:</td>
      
      <td><input class="form-control" type="text" name="IdDevolucion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fecha:</td>
      
      <td><input class="form-control" type="text" name="Fecha" value="" size="32"></td>
    </tr>
     <tr valign="baseline">
       <td nowrap align="right">Motivo:</td>
      
      <td><input  class="form-control" type="text" name="Motivo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">IdVenta:</td>
      
      <td><input class="form-control" type="text" name="IdVenta" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      
      
      <td nowrap align="right">Id Compra:</td>
      <td><input class="form-control" type="text" name="IdCompra" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
     
      
     
     
      <td nowrap align="right">&nbsp;</td>
      
      <td><input class="btn btn-default" type="submit" value="Insertar"></td>
     </tr>
   </table>
   <input type="hidden" name="MM_insert" value="form2">