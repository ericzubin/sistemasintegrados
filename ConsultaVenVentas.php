<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Ventas</title>


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
                    <h1 class="page-header">Consultar Ventas</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
      <div class="form-group">
      <div class="radio">
    <label>Criterio
    <input name="Criterio" class="form-control" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdVenta">
    IdVenta</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Fecha">
    Fecha</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Monto">
    Monto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="NumeroArticulo">
    NumeroArticulo</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="IdCliente">
    IdCliente</label>
    <br>

        <label>
    <input type="radio" name="Campo" value="IdIngreso">
    IdIngreso</label>
    <br>

    </div>
    </div>
</div>

  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM venventas where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo ("<div align='center' class='panel-body'><div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>IdVenta</td>  <td>Fecha</td>  <td>Monto</td>  <td>NumeroArticulo </td>    <td>Status </td>   <td>IdCliente </td>    <td>IdIngreso </td>   <td> </td> <td> </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");
  echo ("<td> $fila[5] </td>");
  echo ("<td> $fila[6] </td>");

    echo ("<td> <a class='btn btn-primary' href='ActualizarVentas.php?Id=".$fila[0]."&Fecha=".$fila[1]."&Monto=".$fila[2]."&NumeroArticulo=".$fila[3]."&Status=".$fila[4]."&IdCliente=".$fila[5]."&IdIngreso=".$fila[6]."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='EliminarVentas.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
