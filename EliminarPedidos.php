<?php
include('conectadb.php');
$Con=Conectar();
$ID=$_GET['Id'];
$QUERY = "DELETE FROM  compedidos WHERE IdPedido = ".$ID;
$Consulta=mysqli_query($Con,$QUERY) or die("Mensaje Error");

echo ("Registros eliminados = ".mysqli_affected_rows($Con));


?>
