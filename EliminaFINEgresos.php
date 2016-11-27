<?php
include("ConectaDB.php");
$Con = Conectar();
$IdEgreso = $_GET['id'];
$query = "DELETE FROM finegresos WHERE idegreso= $IdEgreso";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>