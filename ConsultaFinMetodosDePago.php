<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdMetodoPago">
    IdMetodoPago</label>
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
    <input type="radio" name="Campo" value="Observacion">
    Observacion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdCliente">
    IdCliente</label>
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
$Query="SELECT * FROM finmetodosdepago where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdMetodoPago</td>  <td>Nombre</td>  <td>Status</td>  <td>Observacion </td>    <td>IdCliente </td>  <td> </td> <td> </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");
  

    echo ("<td> <a href='ActualizarMetodosDePago.php?Id".$fila[0]."&Nombre=".$fila[1]."&Status=".$fila[2]."&Observacion =".$fila[3]."&IdCliente=".$fila[4]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarMetodosDePago.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");	
	}
echo("</table>");

}
?>
