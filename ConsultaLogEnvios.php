<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Envios</title>


 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<div align="center">
                    <h1 class="page-header">Consultar Envios</h1>
</div>
<div class="col-lg-2">

<form name="form1" method="post" action="">
  <p>
    <div class="form-group">
      <div class="radio">
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdEnvio">
    IdEnvio</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Fecha">
    Fecha</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Observaciones">
    Observaciones</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="DomicilioEntrega">
    DomicilioEntrega</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="IdFormaEnvio">
    IdFormaEnvio</label>
    <br>


            <label>
    <input type="radio" name="Campo" value="IdEntrega">
    IdEntrega</label>
    <br>
    <label>
<input type="radio" name="Campo" value="IdVenta">
IdVenta</label>
<br>
  </div>
    </div>

</div>
  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input  class="btn btn-default" type="submit" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM logenvios where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>ID</td>  <td>Fecha</td>  <td>Status</td>  <td>Observaciones </td>   <td>DomicilioEntrega </td>   <td>IdFormaEnvio </td>   <td>IdEntrega </td> <td>IdVenta </td>        <td> </td>  <td> </td> </tr>");

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
  echo ("<td> $fila[7] </td>");

    echo ("<td> <a class='btn btn-primary'  href='ActualizarEnvios.php?Id=".$fila[0]."&Fecha=".$fila[1]."&Status=".$fila[2]."&Observaciones=".$fila[3]."&DomicilioEntrega=".$fila[4]."&IdFormaEnvio=".$fila[5]."&IdEntrega=".$fila[6]."&IdVenta=".$fila[7]."'> Actualizar</a></td>");

	echo ("<td><a class='btn btn-danger'  href='EliminarEnvios.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");
}
?>
