<?php
include("ConectaDB.php");
$Con = Conectar();
$IdCuentasPorCobrar = $_GET['id'];
$query = "DELETE FROM fincuentasporcobrar WHERE idcuentasporcobrar= $IdCuentasPorCobrar";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>