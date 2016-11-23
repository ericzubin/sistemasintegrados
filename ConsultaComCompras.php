<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdCompra">
    IdCompra</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="FechaNombre">
    Fecha</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Monto">
    Monto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="NumeroArticulo">
    Numero Articulo</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="IdProvedor">
    IdProvedor</label>
    <br>

       <label>
    <input type="radio" name="Campo" value="Idegreso">
    Idegreso</label>
    <br>


           <label>
    <input type="radio" name="Campo" value="IdMetodoPago">
    IdMetodoPago</label>
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
$Query="SELECT * FROM comcompras where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>ID Compra</td>  <td>Fecha</td>  <td>Monto</td>  <td>NumeroArticulo </td>    <td>Status </td>   <td>IdProvedor </td>   <td>IdEgreso </td>  <td>IdMetodoPago </td></tr>");

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
  echo ("<td> $fila[7] </td>");
  echo ("<td> <a href='ActualizarCompras.php?Id".$fila[0]."&Fecha=".$fila[1]."&Monto=".$fila[2]."&NumeroArticulo=".$fila[3]."&Status=".$fila[4]."&IdProvedor=".$fila[5]."&IdEgreso=".$fila[6]."&IdMetodoPago=".$fila[7]."'> Actualizar</a></td>");
  echo ("<td>  <a href='EliminarCompras.php?Id=".$fila[0]."'>Eliminar</a>             </td>");
	echo ("</tr>");

	
	}
echo("</table>");

}
?>


