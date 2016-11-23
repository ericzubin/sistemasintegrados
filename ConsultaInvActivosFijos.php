<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdActivo">
    IdActivo</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Caracteristicas">
    Caracteristicas</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Estado">
    Estado</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="TipoActivo">
    TipoActivo</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="IdSucursal">
    IdSucursal</label>
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
$Query="SELECT * FROM invactivosfijos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdActivo</td>  <td>Nombre</td>  <td>Caracteristicas</td>  <td>Estado </td>    <td>TipoActivo </td>   <td>IdSucursal </td>     <td> </td> <td> </td> </tr>");

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


    echo ("<td> <a href='ActualizarActivosFijos.php?Id".$fila[0]."&Nombre=".$fila[1]."&Caracteristicas=".$fila[2]."&Estado =".$fila[3]."&TipoActivo=".$fila[4]."&IdSucursal=".$fila[5]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarActivosFijos.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");	
	}
echo("</table>");

}
?>
