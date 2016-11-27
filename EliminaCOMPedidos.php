<?php
include("ConectaDB.php");
$Con = Conectar();
$IdPedido = $_GET['id'];
$query = "DELETE FROM compedidos WHERE idpedido= $IdPedido";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>