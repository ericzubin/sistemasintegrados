<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar nomina</title>


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
                    <h1 class="page-header">Consultar Invnominas</h1>
</div>
<div class="col-lg-2">
<form name="form1" method="post" action="">
  <p>
    <label>Criterio
    <input class="form-control" name="Criterio" type="text" id="Criterio">
    </label>
  </p>
  <p>

    <div class="form-group">
      <div class="radio">

    <label>
    <input type="radio" name="Campo" value="idNomina">
    idNomina</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Monto">
    Monto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="FechaPago">
    FechaPago</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="MotivoPago">
    MotivoPago</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Dias">
    Dias</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
    Status</label>
    <br>


  </div>
    </div>

</div>

  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input  class="btn btn-default" type="submit" name="Submit" value="Consultar">
    </label>
  </p>
</form>
<?php
  if(isset($_GET['Idg']))
  {
    include("conectadb.php");

    $Con=Conectar();
    $Querydel="DELETE FROM invnominas where idNomina =".$_GET['Idg'];
    mysqli_query($Con,$Querydel) or die("Mensaje Error");
    header('Location:ConsultaFinFormasDepago.php');
  }
?>
<?php
if (isset($_POST['Criterio'])){


include("conectadb.php");
$Con=Conectar();
$Criterio=$_POST['Criterio'];
$Campo=$_POST['Campo'];
$Query="SELECT * FROM  invnominas  where $Campo = '$Criterio'";
$Consulta=mysqli_query($Con,$Query) or die("Mensaje Error");
//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
echo("<tr>  <td>idNomina</td>  <td>Monto</td>  <td>FechaPago</td>  <td>MotivoPago </td>    <td>Dias </td>     <td>Status </td> <td> </td> </tr>");

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

    echo ("<td> <a class='btn btn-primary' href='ActualizarInvnominas.php?IdNomina=".$fila[0]."&Monto=".$fila[1]."&FechaPago=".$fila[2]."&MotivoPago=".$fila[3]."&Dias=".$fila[4]."&Status=".$fila[5]."'> Actualizar</a></td>");

	echo ("<td>  <a class='btn btn-danger' href='ConsultaFinFormasDepago.php?Idg=".$fila[0]."'>Eliminar</a>             </td>");


	echo ("</tr>");
	}
echo("</table>");
echo ("</div>
</div>");

}
?>
