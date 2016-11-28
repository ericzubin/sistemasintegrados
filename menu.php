<?php

  require_once('funciones/sesiones.php'); 
  $TipoUser=obtenerTipoUsuario();
  $idioma=$_COOKIE["Idioma"];
  echo " <a href='idiomaes.php'>Español</a>
";
 echo " <a href='idiomaen.php'>Ingles</a>
";
 echo " <a href='datos.php'>Informacion :D</a>";
 echo " <a href='Pagar.php'>Pagar</a>";


  if($TipoUser=="User")
  {
    if($idioma=="es")
    {
     include 'menuUser.php';

    }
    if($idioma=="en"){

     include 'menuUser_en.php';

    }

  }else if($TipoUser=="Admin")
  {
      if($idioma=="es")
      {

      include 'menuAdmin.php';

      } 
      if($idioma=="en"){

      include 'menuAdmin_en.php';

      }
  }
   
?>
