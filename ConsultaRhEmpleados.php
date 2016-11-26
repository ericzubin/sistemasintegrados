<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Empleados</title>


 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<div align="center">
                    <h1 class="page-header">ConsultarEmpleados</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
   <div class="form-group">
      <div class="radio">
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdEmpleado">
    IdEmpleado</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Telefono">
    Telefono</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Direccion">
    Direccion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="FechaNacimiento">
    FechaNacimiento</label>
    <br>
        <label>
    <input type="radio" name="Campo" value="FechaContratacion">
    FechaContratacion</label>
    <br>

        <label>
    <input type="radio" name="Campo" value="RFC">
    RFC</label>
    <br>
            <label>
    <input type="radio" name="Campo" value="IMSS">
    IMSS</label>
    <br>

    <label>
<input type="radio" name="Campo" value="Correo">
Correo</label>
<br>


    <label>
<input type="radio" name="Campo" value="Sexo">
Sexo</label>
<br>


<label>
<input type="radio" name="Campo" value="EstadoCivil">
EstadoCivil</label>
<br>
<label>
<input type="radio" name="Campo" value="CURP">
CURP
</label>
<br>
<label>
<input type="radio" name="Campo" value="IdDepartamento">
IdDepartamento
</label>
<br>
<label>
<input type="radio" name="Campo" value="IdPuesto">
IdPuesto
</label>
<br>
<label>
<input type="radio" name="Campo" value="IdNomina">
IdNomina
</label>
<br>
<label>
<input type="radio" name="Campo" value="IdCuenta">
IdCuenta
</label>
<br><label>
<input type="radio" name="Campo" value="IdDepartamentos">
IdDepartamentos
</label>
<br>

</div>
    </div>

</div>


  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input class="btn btn-default" type="submit" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM rhEmpleados where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");

echo("<tr>  <td>IdEmpleado</td>  <td>Nombre</td>  <td>Telefono</td>  <td>Direccion </td>    <td>FechaNacimiento </td>
<td>FechaContratacion </td>    <td>RFC </td>   <td>IMSS </td>  <td>Correo </td> <td>Sexo </td> <td>EstadoCivil </td> </td> <td>CURP </td>
  <td>IdDepartamento </td>   <td>IdPuesto </td> <td>IdNomina </td> <td>IdCuenta </td> <td>IdDepartamentos </td>     <td> </td> <td> </td> </tr>");



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
  echo ("<td> $fila[11] </td>");
  echo ("<td> $fila[12] </td>");
  echo ("<td> $fila[13] </td>");
  echo ("<td> $fila[14] </td>");
  echo ("<td> $fila[15] </td>");
  echo ("<td> $fila[16] </td>");



    echo ("<td> <a href='ActualizarEmpleados.php?Id=".$fila[0]."&Nombre=".$fila[1]."&Telefono="
    .$fila[2]."&Direccion=".$fila[3]."&FechaNacimiento=".$fila[4]."&FechaContratacion=".$fila[5]."&RFC=".$fila[6].
    "&IMSS=".$fila[7]."&Correo=".$fila[8]."&Sexo=".$fila[9]."&EstadoCivil=".$fila[10]."&CURP=".$fila[11]
    ."&IdDepartamento=".$fila[12]."&IdPuesto=".$fila[13]."&IdNomina=".$fila[14]."&IdCuenta=".$fila[15]."&IdDepartamentos=".$fila[16]."'> Actualizar</a></td>");

	echo ("<td>  <a href='EliminarEmpleados.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
