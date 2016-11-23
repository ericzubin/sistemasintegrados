<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdCuentaPorPagar">
    IdCuentaPorPagar</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Fecha">
    Fecha</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Monto">
    Monto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Plazo">
    Plazo</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="Tasa">
    Tasa</label>
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
$Query="SELECT * FROM fincuentasporpagar where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo("<tr>  <td>IdCuentaPorPagar</td>  <td>Fecha</td>  <td>Monto</td>  <td>Status </td>    <td>Plazo </td>   <td>Tasa </td>   <td>IdCompra </td>  </tr>");

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
  echo ("<td> <a href='ActualizarCuentasPorPagar.php?IdCuentaPorPagar".$fila[0]."&Fecha=".$fila[1]."&Monto=".$fila[2]."&Status=".$fila[3]."&Plazo=".$fila[4]."&Tasa=".$fila[5]."&IdCompra=".$fila[6]."'> Actualizar</a></td>");
  echo ("<td>  <a href='EliminarCuentasPorPagar.php?Id=".$fila[0]."'>Eliminar</a>             </td>");
  echo ("</tr>");

  
  }
echo("</table>");

}
?>


