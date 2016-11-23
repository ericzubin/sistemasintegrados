<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdEntrega">
    IdEntrega</label>
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
    <input type="radio" name="Campo" value="NombreReceptor">
    NombreReceptor</label>
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
$Query="SELECT * FROM logentregas where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdEntrega</td>  <td>Fecha</td>  <td>Status</td>  <td>Observaciones </td>    <td>NombreReceptor </td>    <td> </td> <td> </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");


    echo ("<td> <a href='ActualizarEntregas.php?Id".$fila[0]."&Fecha=".$fila[1]."&Status=".$fila[2]."&Observaciones=".$fila[3]."&NombreReceptor=".$fila[4]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarEntregas.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");

}
?>
