<?php
include("ConectaDB.php");
$Con = Conectar();
$IdProveedor = $_GET['id'];
$query = "DELETE FROM comproveedores WHERE idproveedor= $IdProveedor";
$query = mysqli_query($Con, $query) or die (mysqli_error($Con));

echo "Registros eliminados = ".mysqli_affected_rows($Con);
?>