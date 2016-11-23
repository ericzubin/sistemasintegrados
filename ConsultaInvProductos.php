<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdProducto">
    IdProducto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Marca">
    Marca</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Descripcion">
    Descripcion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Existencia">
    Existencia</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="UnidadMedicion">
    UnidadMedicion</label>
    <br>

        <label>
    <input type="radio" name="Campo" value="Categoria">
    Categoria</label>
    <br>
            <label>
    <input type="radio" name="Campo" value="PrecioCompra">
    PrecioCompra</label>
    <br>



          <label>
    <input type="radio" name="Campo" value="PrecioVenta">
    PrecioVenta</label>
    <br>


              <label>
    <input type="radio" name="Campo" value="Descuento">
    Descuento</label>
    <br>



              <label>
    <input type="radio" name="Campo" value="ImpuestoEspecial">
    ImpuestoEspecial</label>
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
$Query="SELECT * FROM invproductos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdProducto</td>  <td>Nombre</td>  <td>Marca</td>  <td>Descripcion </td>    <td>Existencia </td>   <td>UnidadMedicion </td>    <td>Categoria </td>   <td>PrecioCompra </td>   <td>PrecioVenta </td>  <td>Descuento </td>  <td>ImpuestoEspecial </td><td> </td> <td> </td> </tr>");

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
  echo ("<td> $fila[8] </td>");
  echo ("<td> $fila[9] </td>");
  echo ("<td> $fila[10] </td>");


    echo ("<td> <a href='ActualizarProducto.php?Id".$fila[0]."&Nombre=".$fila[1]."&Marca=".$fila[2]."&Descripcion =".$fila[3]."&Existencia=".$fila[4]."&UnidadMedicion=".$fila[5]."&Categoria=".$fila[6]."&PrecioCompra=".$fila[7]."&PrecioVenta=".$fila[8]."&Descuento=".$fila[9]."ImpuestoEspecial=".$fila[10]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarProducto.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");	
	}
echo("</table>");

}
?>
