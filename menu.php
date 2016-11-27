<?php

  require_once('funciones/sesiones.php'); 
  $TipoUser=obtenerTipoUsuario();
  if($TipoUser=="User")
  {
     include 'menuUser.php';

  }else if($TipoUser=="Admin")
  {
     include 'menuAdmin.php';
  }
   
?>
