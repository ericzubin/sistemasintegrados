
<?php
$_SESSION['idioma']="en";
setcookie("Idioma","en");
echo $_COOKIE["Idioma"];


header("Location: menu.php");



?>
