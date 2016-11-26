<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Departamentos</title>


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
    <input type="radio" name="Campo" value="IdDepartamentos">
    IdDepartamento</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Localizacion">
    Localizacion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
      </div>
    </div>

</div>
  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input class="btn btn-default" type="submit" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM rhdepartamentos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");

echo("<tr>  <td>ID</td>  <td>Nombre</td>  <td>Localizacion</td>  <td>Status </td>  <td> </td>  <td> </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0]</td>");
	echo ("<td> $fila[1]</td>");
	echo ("<td> $fila[2]</td>");
	echo ("<td> $fila[3]</td>");
    echo ("<td> <a class='btn btn-primary' href='ActualizarDepartamento.php?Id=".$fila[0]."&Nombre=".$fila[1]."&Localizacion=".$fila[2]."&Status=".$fila[3]."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='EliminarDepartamento.php?Id=".$fila[0]."'>Eliminar</a>             </td>");
	echo ("</tr>");

	
	}
echo("</table>");

}
?>
