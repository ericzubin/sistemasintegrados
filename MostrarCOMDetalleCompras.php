<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Mostrar Detalle Compras</title>


 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php
     include 'menu.php';
?>
<div align="center">
                    <h1 class="page-header">Mostrar Detalle Compras</h1>
</div>
<div align="center" class="panel-body">

<div  class="table-responsive">
<?php
	include("ConectaDB.php");
	$Con = Conectar();
	$query = "SELECT * FROM comdetallecompras";
	$Consulta = mysqli_query($Con, $query);
	$cadena="<table border=1 class='table table-striped table-bordered table-hover'><tr>";
	
		while ($property = mysqli_fetch_field($Consulta)){
    		$cadena.='<td>'.$property->name.'</td>';  //obtener el cnombre del campo
    		
		}
		$cadena.="</tr>";
		while($res=mysqli_fetch_array($Consulta)){
			$cadena.="<tr>";
			for($a=0; $a<mysqli_num_fields($Consulta); $a++){
			$cadena.="<td>".$res[$a]."</td>";			
			}
			$cadena.="</tr>";
		}
	
	
	$cadena.="</table>";
	echo $cadena;
?>

	
</div>
</div>

</body>
</html>	
