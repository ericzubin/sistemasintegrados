<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdFormaPago">
    IdFormaPago</label>
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
    <input type="radio" name="Campo" value="IdVenta">
    IdVenta</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="IdCompra">
    IdCompra</label>
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
$Query="SELECT * FROM finformasdepago where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdFormaPago</td>  <td>Nombre</td>  <td>Status</td>  <td>Observacion </td>    <td>IdVenta </td>   <td>IdCompra  <td> </td> <td> </td> </tr>");

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


    echo ("<td> <a href='ActualizarFormasDePago.php?Id".$fila[0]."&Nombre=".$fila[1]."&Status=".$fila[2]."&Observacion =".$fila[3]."&IdVenta=".$fila[4]."&IdCompra=".$fila[5]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarFormasDePago.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");	
	}
echo("</table>");

}
?>