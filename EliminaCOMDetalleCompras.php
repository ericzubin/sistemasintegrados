<?php
include("ConectaDB.php");
$Con = Conectar();
$IdDetalleCompra = $_GET['id'];
$query = "DELETE FROM comdetallecompras WHERE iddetallecompra= $IdDetalleCompra";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>