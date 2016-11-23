<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdPuesto">
    Id Puesto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Descripcion">
    Descripcion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nivel">
    Nivel</label>
    <br>

  <label>
    <input type="radio" name="Campo" value="PersonalRequerido">
    Personal Requerido</label>
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
$Query="SELECT * FROM rhpuestos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>Id Puesto</td>  <td>Nombre</td>  <td>Descripcion</td>  <td>Nivel </td>  <td>PersonalRequerido </td> </tr>");


for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");


   echo ("<td> <a href='ActualizarPuestos.php?Id".$fila[0]."&Nombre=".$fila[1]."&Descripcion=".$fila[2]."&Nivel=".$fila[3]."&PersonalRequerido=".$fila[4]."'> Actualizar</a></td>");
	 echo ("<td>  <a href='EliminarPuestos.php?Id=".$fila[0]."'>Eliminar</a>   </td>");

	echo ("</tr>");

	
	}
echo("</table>");

}
?>
