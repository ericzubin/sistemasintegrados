<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
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
$Query="SELECT * FROM rhturnos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
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

    echo ("<td> <a href='ActualizarTurnos.php?Id=".$fila[0]."&Nombre=".$fila[1]."&HoraEntrada=".$fila[2]."&HoraSalida=".$fila[3]."&DiasLaborales=".$fila[4]."&TipoJornada=".$fila[5]."&Status=".$fila[6]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarTurnos.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");

}
?>
