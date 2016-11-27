<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Detalle Compras</title>


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
                    <h1 class="page-header">Consultar Detalle Compras</h1>
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
    <input type="radio" name="Campo" value="IdDetalleCompra">
IdDetalleCompra</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdCompra">
IdCompra</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdProducto">
IdProducto</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="PrecioUnitario">
PrecioUnitario</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Cantidad">
Cantidad</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Descuento">
Descuento</label>
    <br>
       </div>
    </div>

</div>
    <input type="submit" class="btn btn-default" name="Submit" value="Consultar">    
  </p>
  <p>&nbsp;</p>
</form>
<?php
	if (isset($_POST['Criterio'])){
		include("ConectaDB.php");
		$Con = Conectar();
		$Criterio = $_POST['Criterio'];
		$Campo = $_POST['Campo'];
		$Query = "SELECT * FROM comdetallecompras where $Campo = '$Criterio'";
		$Consulta = mysqli_query($Con, $Query);
        echo ("<div align='center' class='panel-body'>

        <div  class='table-responsive'>");
		echo("<tr> <td> Id </td> <td> IdDetalleCompra </td> <td> IdCompra </td> <td> IdProducto </td> <td> PrecioUnitario </td> <td> Cantidad </td> <td> Descuento </td> </tr>");
		for($a=0; $a<mysqli_num_rows($Consulta); $a++){
			$fila=mysqli_fetch_row($Consulta);
			echo("<tr>");
			echo("<td> $fila[0]</td>");
			echo("<td> $fila[1]</td>");
			echo("<td> $fila[2]</td>");
			echo("<td> $fila[3]</td>");
			echo("<td> $fila[4]</td>");
			echo("<td> $fila[5]</td>");
			echo("<td> <a class='btn btn-primary'  href='ActualizaCOMDetalleCompras.php?id=$fila[0]&IdCompra=$fila[1]&IdProducto=$fila[2]&PrecioUnitario=$fila[3]&Cantidad=$fila[4]&Descuento=$fila[5]'>Actualizar</a> </td>");
			echo("<td> <a class='btn btn-danger' href='EliminaCOMDetalleCompras.php?id=$fila[0]'>Eliminar</a> </td>");
			echo("</tr>");
		}
			echo("</table>");
echo ("</div>
</div>");
	}
	function actualiza(){
		if(isset($_POST['x']) && !empty($_POST['x'])){
			$accion = $_POST['x'];
		}
	}
	function elimina(){
	
	}
?>