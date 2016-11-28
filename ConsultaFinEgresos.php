<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Compras</title>


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
                    <h1 class="page-header">Consultar Egresos</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
  
    <label>Criterio
    <input name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>
    <div class="form-group">
      <div class="radio">
    <label>
    <input type="radio" name="Campo" value="IdEgreso">
    IdEgreso</label>
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
    <input type="radio" name="Campo" value="IdSuministro">
    IdSuministro</label>
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
$Query="SELECT * FROM finegresos where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
	//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>IdEgreso</td>  <td>Fecha</td>  <td>Monto</td>  <td>Status </td>    <td>IdSuministro </td>   <td>Tasa </td>   <td>IdCompra </td>  </tr>");

for($a=0; $a < mysqli_num_rows($Consulta) ; $a++)
  {
  $fila=mysqli_fetch_row($Consulta);
  echo ("<tr>");
  echo ("<td> $fila[0] </td>");
  echo ("<td> $fila[1] </td>");
  echo ("<td> $fila[2] </td>");
  echo ("<td> $fila[3] </td>");
  echo ("<td> $fila[4] </td>");
  echo ("<td> <a href='ActualizarEgresos.php?IdEgreso".$fila[0]."&Fecha=".$fila[1]."&Monto=".$fila[2]."&Status=".$fila[3]."&IdSuministro=".$fila[4]."'> Actualizar</a></td>");
  echo ("<td>  <a href='EliminarEgresos.php?Id=".$fila[0]."'>Eliminar</a></td>");
  echo ("</tr>");


  }
echo("</table>");

}
?>
