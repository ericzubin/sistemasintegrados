<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Consultar Pedidos</title>


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
                    <h1 class="page-header">Consultar Pedidos</h1>
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
    <input type="radio" name="Campo" value="IdPedido">
IdPedido</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Fecha">
Fecha</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="Status">
Status</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdProveedor">
IdProveedor</label>
    <br>
    <label>
    <input type="radio" name="Campo" value="IdProducto">
IdProducto</label>
    <br>
	    </div>
    </div>

</div>
    <input type="submit" class="btn btn-default"  name="Submit" value="Consultar">    
  </p>
  <p>&nbsp;</p>
</form>
<?php
	if (isset($_POST['Criterio'])){
		include("ConectaDB.php");
		$Con = Conectar();
		$Criterio = $_POST['Criterio'];
		$Campo = $_POST['Campo'];
		$Query = "SELECT * FROM compedidos where $Campo = '$Criterio'";
		$Consulta = mysqli_query($Con, $Query);
echo ("<div align='center' class='panel-body'>

<div  class='table-responsive'>");
echo("<table border=1 class='table table-striped table-bordered table-hover'>");
		echo("<tr> <td> Id </td> <td> Fecha </td> <td> Status </td> <td> IdProveedor </td> <td> IdProducto </td> </tr>");
		for($a=0; $a<mysqli_num_rows($Consulta); $a++){
			$fila=mysqli_fetch_row($Consulta);
			echo("<tr>");
			echo("<td> $fila[0]</td>");
			echo("<td> $fila[1]</td>");
			echo("<td> $fila[2]</td>");
			echo("<td> $fila[3]</td>");
			echo("<td> $fila[4]</td>");
			echo("<td> <a href='ActualizaCOMPedidos.php?id=$fila[0]&Fecha=$fila[1]&Status=$fila[2]&IdProveedor=$fila[3]&IdProducto=$fila[4]'>Actualizar</a> </td>");
			echo("<td> <a href='EliminaCOMPedidos.php?id=$fila[0]'>Eliminar</a> </td>");
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