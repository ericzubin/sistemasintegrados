<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Cuentas Por Cobrar</title>


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
                    <h1 class="page-header">Consultar Cuentas Por Cobrar</h1>
</div>
<div class="col-lg-2">

<form name="form1" method="post" action="">
  <label>Criterio
  <input name="Criterio" type="text" id="Criterio">
  </label>
  <p>
      <div class="form-group">
      <div class="radio">
    <label>
    <input type="radio" name="Campo" value="IdCuentaPorCobrar">
IdCuentaPorCobrar</label>
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
	Status
    </label>
    <br>
	<label>
    <input type="radio" name="Campo" value="Plazo">
	Plazo
    </label>
    <br>
	<label>
    <input type="radio" name="Campo" value="Tasa">
    Tasa
    </label>
    <br>
	<label>
    <input type="radio" name="Campo" value="IdVenta">
	IdVenta
    </label>
    <br>
	<label>
     </div>
    </div>

</div>
    <input type="submit" class="btn btn-default" name="Submit" value="Consultar">
    </label>
  </p>
  <p>&nbsp;</p>
</form>
<?php
	if (isset($_POST['Criterio'])){
		include("ConectaDB.php");
		$Con = Conectar();
		$Criterio = $_POST['Criterio'];
		$Campo = $_POST['Campo'];
		$Query = "SELECT * FROM fincuentasporcobrar where $Campo = '$Criterio'";
		$Consulta = mysqli_query($Con, $Query);
	//Tabla
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
		echo("<tr> <td> Id </td> <td> Fecha </td> <td> Monto </td> <td> Status </td> <td> Plazo </td> <td> Tasa </td> <td> IdVenta </td> </tr>");
		for($a=0; $a<mysqli_num_rows($Consulta); $a++){
			$fila=mysqli_fetch_row($Consulta);
			echo("<tr>");
			echo("<td> $fila[0]</td>");
			echo("<td> $fila[1]</td>");
			echo("<td> $fila[2]</td>");
			echo("<td> $fila[3]</td>");
			echo("<td> $fila[4]</td>");
			echo("<td> $fila[5]</td>");
			echo("<td> $fila[6]</td>");
			echo("<td> <a class='btn btn-primary' href='ActualizaFINCuentasPorCobrar.php?id=$fila[0]&Fecha=$fila[1]&Monto=$fila[2]&Status=$fila[3]&Plazo=$fila[4]&Tasa=$fila[5]&IdVenta=$fila[6]'>Actualizar</a> </td>");
			echo("<td> <a class='btn btn-danger' href='EliminaFINCuentasPorCobrar.php?id=$fila[0]'>Eliminar</a> </td>");
			echo("</tr>");
		}
		echo("</table>");
echo ("</div>
</div>");	}
	function actualiza(){
		if(isset($_POST['x']) && !empty($_POST['x'])){
			$accion = $_POST['x'];
		}
	}
	function elimina(){
	
	}
?>