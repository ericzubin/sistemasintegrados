<?php
include('conectadb.php');
$Con=Conectar();
$ID=$_GET['Id'];
$QUERY = "DELETE FROM rhturnos WHERE IdTurno = ".$ID;
$Consulta=mysqli_query($Con,$QUERY) or die("Mensaje Error");

echo ("Registros eliminados = ".mysqli_affected_rows($Con));


?>
