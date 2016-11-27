<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Permisos</title>


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
                    <h1 class="page-header">Consultar Permisos</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" class="form-control" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdPermiso">
    IdPermiso</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="TipoPermiso">
    TipoPermiso</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="FechaOtorgacion">
    FechaOtorgacion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="FechaVencimiento">
    FechaVencimiento</label>
    <br>


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
$Query="SELECT * FROM syspermisos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo ("<div align='center' class='panel-body'><div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>IdPermiso</td>  <td>TipoPermiso</td>  <td>Status</td>  <td>FechaOtorgacion </td>    <td>FechaVencimiento </td>   <td> </td> <td> </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");

    echo ("<td> <a class='btn btn-primary' href='ActualizarPermisos.php?Id=".$fila[0]."&TipoPermiso=".$fila[1]."&Status=".$fila[2]."&FechaOtorgacion=".$fila[3]."&FechaVencimiento="."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='EliminarPermisos.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");
}
?>
