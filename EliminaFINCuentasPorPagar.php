<?php
include("ConectaDB.php");
$Con = Conectar();
$IdCuentasPorPagar = $_GET['id'];
$query = "DELETE FROM fincuentasporpagar WHERE idcuentasporpagar= $IdCuentasPorPagar";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>