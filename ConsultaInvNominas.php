<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdNomina">
    IdNomina</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Monto">
    Monto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="FechaPago">
    FechaPago</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="MotivoPago">
    MotivoPago</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Dias">
    Dias</label>
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
$Query="SELECT * FROM invnominas where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdNomina</td>  <td>Monto</td>  <td>FechaPago</td>  <td>MotivoPago </td>    <td>Dias </td>   <td>Status </td>   ¿ <td> </td> <td> </td> </tr>");

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


    echo ("<td> <a href='ActualizarNominas.php?Id".$fila[0]."&Monto=".$fila[1]."&FechaPago=".$fila[2]."&MotivoPago =".$fila[3]."&Dias=".$fila[4]."&Status=".$fila[5]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarNominas.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");	
	}
echo("</table>");

}
?>
