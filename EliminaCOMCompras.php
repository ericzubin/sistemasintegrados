<?php
include("ConectaDB.php");
$Con = Conectar();
$IdCompra = $_GET['id'];
$query = "DELETE FROM comcompras WHERE idcompra= $IdCompra";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>