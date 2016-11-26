<?php

 function Conectar()
{
	$Con=mysqli_connect("localhost","root","","sistemasintegrados2016");
	return $Con;
}
 function Ejecutar($Query, $Con)
{
	mysqli_query($Con,$Query);
}

 function Desconectar($Con)
{
mysqli_close($Con);
}
?>