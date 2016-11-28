<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Tipos Cuentas</title>


 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

  <?php
     include 'menu.php';
?>
<div align="center">
                    <h1 class="page-header">Consultar Tipos Cuentas</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
        <div class="form-group">
      <div class="radio">
    <label>Criterio
    <input name="Criterio"class="form-control" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdTipo">
    IdTipo</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdPermiso">
    IdPermiso</label>
    <br>



  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit"  class="btn btn-default" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM systiposcuentas where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>IdTipo</td>  <td>Nombre</td>  <td>Status</td>  <td>IdPermiso </td>    <td> </td> <td> </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");

    echo ("<td> <a class='btn btn-primary' href='ActualizaSysTiposCuentas.php?Id=".$fila[0]."&Nombre=".$fila[1]."&Status=".$fila[2]."&IdPermiso=".$fila[3]."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='EliminarTiposCuentas.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
