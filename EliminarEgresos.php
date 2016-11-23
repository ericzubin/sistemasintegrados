<?php
include('conectadb.php');
$Con=Conectar();
$ID=$_GET['Id'];
$QUERY = "DELETE FROM  finegresos WHERE IdEgreso = ".$ID;
$Consulta=mysqli_query($Con,$QUERY) or die("Mensaje Error");
finegresos
echo ("Registros eliminados = ".mysqli_affected_rows($Con));


?>
