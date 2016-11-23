<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdProveedor">
    IdProveedor</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="DomicilioFiscal">
    DomicilioFiscal</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="DomicilioParticular">
    DomicilioParticular</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="RFC">
    RFC</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="Telefono">
    Telefono</label>
    <br>

        <label>
    <input type="radio" name="Campo" value="Correo">
    Correo</label>
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
$Query="SELECT * FROM comproveedores where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdProveedor</td>  <td>Nombre</td>  <td>DomicilioFiscal</td>  <td>DomicilioParticular </td>    <td>RFC </td>   <td>Telefono </td>    <td>Correo </td>   <td>Status </td> <td> </td> <td> </td> </tr>");

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

    echo ("<td> <a href='ActualizarProvedores.php?Id=".$fila[0]."&Nombre=".$fila[1]."&DomicilioFiscal=".$fila[2]."&DomicilioParticular=".$fila[3]."&RFC=".$fila[4]."&Telefono=".$fila[5]."&Correo=".$fila[6]."&Status=".$fila[7]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarProvedores.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");

}
?>
