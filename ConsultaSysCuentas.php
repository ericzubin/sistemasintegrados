<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdCuenta">
    IdCuenta</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Password">
    Password</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="TipoCuenta">
    TipoCuenta</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Intentos">
    Intentos</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="FechaUltimoAcceso">
    FechaUltimoAcceso</label>
    <br>

        <label>
    <input type="radio" name="Campo" value="IdTipo">
    IdTipo</label>
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
$Query="SELECT * FROM syscuentas where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdCuenta</td>  <td>Password</td>  <td>TipoCuenta</td>  <td>Intentos </td>    <td>Status </td>   <td>FechaUltimoAcceso </td>    <td>IdTipo </td>    <td> </td> <td> </td> </tr>");

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

    echo ("<td> <a href='ActualizarCuentas.php?Id=".$fila[0]."&Password=".$fila[1]."&TipoCuenta=".$fila[2]."&Intentos=".$fila[3]."&Status=".$fila[4]."&FechaUltimoAcceso=".$fila[5]."&IdTipo=".$fila[6]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarCuentas.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");

}
?>
