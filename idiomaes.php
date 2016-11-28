<?php
$_SESSION['idioma']="es";
setcookie("Idioma","es");
echo $_COOKIE["Idioma"];
header("Location: menu.php");


?>