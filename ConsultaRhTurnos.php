<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Turnos</title>


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
                    <h1 class="page-header">Consultar Turnos</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" class="form-control" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <div class="form-group">
      <div class="radio">
    <label>
    <input type="radio" name="Campo" value="IdTurno">
    IdTurno</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="HoraEntrada">
    HoraEntrada</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="HoraSalida">
    HoraSalida</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="DiasLaborales">
    DiasLaborales</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="TipoJornada">
    TipoJornada</label>
    <br>


            <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
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
$Query="SELECT * FROM rhturnos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>IdTurno</td>  <td>Nombre</td>  <td>HoraEntrada</td>  <td>HoraSalida </td>    <td>DiasLaborales </td>   <td>TipoJornada </td>    <td>Status </td>     <td> </td> <td> </td> </tr>");

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

    echo ("<td> <a class='btn btn-primary' href='ActualizarTurnos.php?Id=".$fila[0]."&Nombre=".$fila[1]."&HoraEntrada=".$fila[2]."&HoraSalida=".$fila[3]."&DiasLaborales=".$fila[4]."&TipoJornada=".$fila[5]."&Status=".$fila[6]."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='EliminarTurnos.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
