<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Puestos</title>


 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<?php
     include 'menu.php';
?>
<div align="center">
                    <h1 class="page-header">Consultar Puestos</h1>
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
    <input type="radio" name="Campo" value="IdPuesto">
    Id Puesto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nombre">
    Nombre</label>
    <br>
      <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Descripcion">
    Descripcion</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Nivel">
    Nivel</label>
    <br>
   <label>
    <input type="radio" name="Campo" value="PersonalRequerido">
    PersonalRequerido</label>
    <br>
  <label>
    <input class="btn btn-default" type="radio" name="Campo" value="PersonalRequerido">
    Personal Requerido</label>
    <br>
</div>
    </div>

</div>


  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit" class="btn btn-default" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM rhpuestos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");

echo("<tr>  <td>Id Puesto</td>  <td>Nombre</td>  <td>Status</td>  <td>Descripcion</td>  <td>Nivel </td>  <td>PersonalRequerido </td> </tr>");


for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
	{
	$fila=mysqli_fetch_row($Consulta);
	echo ("<tr>");
	echo ("<td> $fila[0] </td>");
	echo ("<td> $fila[1] </td>");
	echo ("<td> $fila[2] </td>");;
	echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");
  echo ("<td> $fila[5] </td>");

   echo ("<td> <a class='btn btn-primary' href='ActualizarPuestos.php?Id=".$fila[0]."&Nombre=".$fila[1]."&Status=".$fila[2]."&Descripcion=".$fila[3]."&Nivel=".$fila[4]."&PersonalRequerido=".$fila[5]."'> Actualizar</a></td>");
	 echo ("<td>  <a class='btn btn-danger' href='EliminarPuestos.php?Id=".$fila[0]."'>Eliminar</a>   </td>");

	echo ("</tr>");

	
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
