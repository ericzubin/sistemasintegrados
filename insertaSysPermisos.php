<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Clientes</title>


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
                    <h1 class="page-header">Consultar Clientes</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input name="Criterio" class="form-control" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="Campo" value="IdCliente">
    IdCliente</label>
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
$Query="SELECT * FROM venclientes where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo("<table border=1 >");
echo ("<div align='center' class='panel-body'><div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>IdCliente</td>  <td>Nombre</td>  <td>DomicilioFiscal</td>  <td>DomicilioParticular </td>    <td>RFC </td>   <td>Telefono </td>    <td>Correo </td>   <td>Status </td> <td> </td> <td> </td> </tr>");

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

    echo ("<td> <a class='btn btn-primary' href='ActualizarClientes.php?Id=".$fila[0]."&Nombre=".$fila[1]."&DomicilioFiscal=".$fila[2]."&DomicilioParticular=".$fila[3]."&RFC=".$fila[4]."&Telefono=".$fila[5]."&Correo=".$fila[6]."&Status=".$fila[7]."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='EliminarClientes.php?Id=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
