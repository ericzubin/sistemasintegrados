<?php

  require_once('funciones/sesiones.php'); 
  $TipoUser=obtenerTipoUsuario();
  $idioma=$_SESSION['idioma'];

  if($TipoUser=="User")
  {
    if($idioma="es")
    {
     include 'menuUser.php';

    }else if($idioma="en"){
     include 'menuUser_en.php';

    }

  }else if($TipoUser=="Admin")
  {
      if($idioma="es")
      {
      include 'menuAdmin.php';

      }else if($idioma="en"){
             include 'menuAdmin_en.php';

      }
  }
   
?>
