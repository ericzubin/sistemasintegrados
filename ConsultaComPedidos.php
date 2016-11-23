<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdPedido">
    IdPedido</label>
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
    <input type="radio" name="Campo" value="IdProveedor">
    IdProveedor</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdProducto">
    IdProducto</label>
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
$Query="SELECT * FROM compedidos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdPedido</td>  <td>Fecha</td>  <td>Status</td>  <td>IdProveedor </td>    <td>IdProducto </td> </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");
	echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");
  echo ("<td> <a href='ActualizarPedidos.php?IdPedido".$fila[0]."&Fecha=".$fila[1]."&Status=".$fila[2]."&IdProveedor=".$fila[3]."&IdProducto=".$fila[4]."'> Actualizar</a></td>");
  echo ("<td>  <a href='EliminarPedidos.php?Id=".$fila[0]."'>Eliminar</a>             </td>");
	echo ("</tr>");

	
	}
echo("</table>");

}
?>


