<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdDetalleVenta">
    IdDetalleVenta</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdVenta">
    IdVenta</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdProducto">
    IdProducto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="PrecioUnitario">
    PrecioUnitario</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Cantidad">
    Cantidad</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="Descuento">
    Descuento</label>
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
$Query="SELECT * FROM vendetalleventas where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdDetalleVenta</td>  <td>IdVenta</td>  <td>IdProducto</td>  <td>PrecioUnitario </td>    <td>Cantidad </td>   <td>Telefono </td>    <td>Descuento </td>  <td> </td> <td> </td> </tr>");

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

    echo ("<td> <a href='ActualizarDetalleVentas.php?Id=".$fila[0]."&IdVenta=".$fila[1]."&IdProducto=".$fila[2]."&PrecioUnitario=".$fila[3]."&Cantidad=".$fila[4]."&Telefono=".$fila[5]."&Descuento=".$fila[6]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarDetalleVentas.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");

}
?>
