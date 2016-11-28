<?php
/*
  require_once('funciones/sesiones.php'); 
  validaSesion();
  $TipoUser=obtenerTipoUsuario();
  if($TipoUser=="User")
  {

  }else
  {
      header("Location: login.html");
  }
  */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
 {
 padding:0px;
 margin:0px;
}
#SYS
{
background-color:#008B8C;
}
#RH
{
background-color:#9ACD32;
}
#COM
{
background-color:#FF6347;
}
#VEN{
   background-color:#6A5ACD;
 
}
#LOG
{
background-color:#F4A460;
}

#INV
{
background-color:#DDA0DD;
}

#FIN
{
background-color:#DC143C;
}
#back
{
   background-color:#;

}


#header {
 margin:auto;
 width:50%;
 font-family:arial;
}
ul, ol {
 list-style:none;
}
.nav li a {
 color:#FFFFFF;
 text-decoration:none;
 padding: 20px 30px;
 display:block;
}
.nav li a:hover {
 background-color:#FF3300;
}
.nav > li {
 float:left;
}
.nav li ul {
 display:none;
 position:absolute;
 min-width:50px;
}

.nav li:hover > ul {
 display:block;
}

.nav li ul li {
 position:relative;
}
.nav li ul li ul {
 right:-140px;
 top:0px;
}
</style>
</head>
<body>
      

      <div id="header">
      
     
                            <a id="back" href="javascript:history.back(1)"><img src="iconoback.ico" alt="Smiley face" height="5%" width="5%">
</a>
        <ul class="nav">
   
          <li id="SYS"><a href="">SYS</a>
          	<ul>
                <li id="SYS" > <a href="">Permisos</a>
                     <ul>
                       <li id="SYS"> <a href="insertPerrmisos.php">Insertar</a></li>
                       <li id="SYS"> <a href="EliminarSYSPermiso.php">Consulta</a></li>
                       <li id="SYS"> <a href="MostrarSYSPermiso.php">Mostrar</a></li>
                    </ul>                
                 </li>   
                   <li id="SYS" > <a href="">Tipos Cuentas
</a>
                     <ul>
                        <li id="SYS"> <a href="insertTiposCuentas.php">Insertar</a></li>
                       <li id="SYS"> <a href="ConsultaSysTiposCuentas.php">Consulta</a></li>
                       <li id="SYS"> <a href="MuestraSysTiposCuentas.php">Mostrar</a></li>
                    </ul>                
                 </li>     
            </ul>
          </li>
          <li id="RH"><a href="">RH</a>
              <ul>

                <li id="RH"> <a href="">Departamentos</a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHDepartamentos.php">Insertar</a></li>
                       <li id="RH"> <a href="ConsultaRhDepartamentos.php">Consultar</a></li>
                       <li id="RH"> <a href="MostrarRHDepartamentos.php">Mostrar</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Empleados</a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHEmpleados.php">Insertar</a></li>
                       <li id="RH"> <a href="ConsultaRhEmpleados.php">Consultar</a></li>
                       <li id="RH"> <a href="MostrarRHEmpleados.php">Mostrar</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Puestos</a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHPuestos.php">Insertar</a></li>
                       <li id="RH"> <a href="ConsultaRhPuestos.php">Consultar</a></li>
                       <li id="RH"> <a href="MostrarRHPuestos.php">Mostrar</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Surcusales
</a>
                    <ul>
                       <li id="RH"> <a href="insertaRHSurcusales.php">Insertar</a></li>
                       <li id="RH"> <a href="ConsultaRhSurcusales.php">Consultar</a></li>
                       <li id="RH"> <a href="MuestraRhSurcusales.php">Mostrar</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Turnos 
</a>
                    <ul>
                       <li id="RH"> <a href="insertaRHTurnos.php">Insertar</a></li>
                       <li id="RH"> <a href="ConsultaRhTurnos.php">Consultar</a></li>
                       <li id="RH"> <a href="MuestraRhTurnos.php">Mostrar</a></li>
                    </ul>
                 </li>
              </ul>
          </li>
          <li id="COM"><a href="">COM</a>
              <ul>

                <li id="COM"> <a href="">Compras</a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMCompras.php">Insertar</a></li>
                       <li id="COM"> <a href="ConsultaCOMCompras.php">Consultar</a></li>
                       <li id="COM"> <a href="MostrarCOMCompras.php">Mostrar</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Detalle Compras 
</a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMDetalleCompras.php">Insertar</a></li>
                       <li id="COM"> <a href="ConsultaCOMDetalleCompras.php">Consultar</a></li>
                       <li id="COM"> <a href="MostrarCOMDetalleCompras.php">Mostrar</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">cash order</a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMPedidos.php">Insertar</a></li>
                       <li id="COM"> <a href="ConsultaCOMPedidos.php">Consultar</a></li>
                       <li id="COM"> <a href="MostrarCOMPedidos.php">Mostrar</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Proveedores</a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMProveedores.php">Insertar</a></li>
                       <li id="COM"> <a href="ConsultaCOMProveedores.php">Consultar</a></li>
                       <li id="COM"> <a href="MostrarCOMProveedores.php">Mostrar</a></li>
                    </ul>
                </li>


            </ul>

          </li>
             
          <li id="VEN"><a href="">VEN</a>
              <ul>

                 <li id="VEN"> <a href="">Clientes</a>
                    <ul>
                       <li id="VEN"> <a href="insertClientes.php">Insertar</a></li>
                       <li id="VEN"> <a href="ConsultaVenClientes.php">Consulta</a></li>
                       <li id="VEN"> <a href="MuestraVenClientes.php">Mostrar</a></li>
                    </ul>

              </li>
              <li id="VEN"> <a href="">Detalle Ventas</a>
                    <ul>
                       <li id="VEN"> <a href="insertDetalleVentas.php">Insertar</a></li>
                       <li id="VEN"> <a href="ConsultaVenDetalleVentas.php">Consulta</a></li>
                       <li id="VEN"> <a href="MuestraVenDetalleVentas.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="VEN"> <a href="">Devoluciones</a>
                    <ul>
                      <li id="VEN"> <a href="insertaVENDevoluciones.php">Insertar</a></li>
                       <li id="VEN"> <a href="ConsultaVenDevoluciones.php">Consulta</a></li>
                       <li id="VEN"> <a href="MuestraVenDevoluciones.php">Mostrar</a></li>
                    </ul>
                    
              </li>
                 <li id="VEN"> <a href="">Ventas
</a>
                    <ul>
                       <li id="VEN"> <a href="insertVentas.php">Insertar</a></li>
                       <li id="VEN"> <a href="ConsultaVenVentas.php">Consulta</a></li>
                       <li id="VEN"> <a href="MuestraVenVentas.php">Mostrar</a></li>
                    </ul>
                    
              </li>

            </ul>

          </li>


          <li id="LOG"><a href="">LOG</a>
            <ul>
              <li id="LOG"> <a href="">Entregas</a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGEntregas.php">Insertar</a></li>
                       <li id="LOG"> <a href="ConsultaLogEntregas.php">Consulta</a></li>
                       <li id="LOG"> <a href="MostrarLOGEntregas.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="LOG"> <a href="">Envios</a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGEnvios.php">Insertar</a></li>
                       <li id="LOG"> <a href="ConsultaLogEnvios.php">Consultar</a></li>
                       <li id="LOG"> <a href="MostrarLOGEnvios.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="LOG"> <a href="">Formas De Envio </a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGFormasDeEnvio.php">Insertar</a></li>
                       <li id="LOG"> <a href="ConsultaLogFormasDeEnvio.php">Consultar</a></li>
                       <li id="LOG"> <a href="MostrarLOGFormasDeEnvio.php">Mostrar</a></li>
                    </ul>
                    
              </li>



            </ul>


          </li>

          <li id="INV"><a href="">INV</a>
          <ul>
            <li id="INV"> <a href="">Activos Fijos</a>
                    <ul>
                       <li id="INV"> <a href="InsertarInactivosfijos.php">Insertar</a></li>
                       <li id="INV"> <a href="ConsultaInvActivosFijos.php">Consultar</a></li>
                       <li id="INV"> <a href="Mostrarinactivosfijos.php">Mostrar</a></li>
                    </ul>
                    
              </li>
                <li id="INV"> <a href=""> Categorias Productos</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVCategoriasProductos.php">Insertar</a></li>
                       <li id="INV"> <a href="ConsultaInvCategoriasProductos.php">Consultar</a></li>
                       <li id="INV"> <a href="MostrarINVCategoriasProductos.php">Mostrar</a></li>
                    </ul>
                    
              </li>
                <li id="INV"> <a href="">Nominas</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVNominas.php">Insertar</a></li>
                       <li id="INV"> <a href="ConsultaInvNominas.php">Consultar</a></li>
                       <li id="INV"> <a href="Mostrarinvnominas.php">Mostrar</a></li>
                    </ul>
                    
              </li>
               <li id="INV"> <a href="">Productos</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVProductos.php">Insertar</a></li>
                       <li id="INV"> <a href="ConsultaInvProductos.php">Consultar</a></li>
                       <li id="INV"> <a href="Mostrarinproductos.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="INV"> <a href="">Suministros</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVSuministros.php">Insertar</a></li>
                       <li id="INV"> <a href="ConsultaInvSuministros.php">Consultar</a></li>
                       <li id="INV"> <a href="MostrarINVSuministros.php">Mostrar</a></li>

                       
                    </ul>
                    
              </li>



            </ul>



            <li id="FIN"><a href="">FIN</a>
                <ul>
                  <li id="FIN"> <a href="">Cuentas Por Pagar</a>
                    <ul>
                       <li id="FIN"> <a href="InsertaFINCuentasPorPagar.php">Insertar</a></li>
                       <li id="FIN"> <a href="ConsultaFINCuentasPorPagar.php">Consultar</a></li>
                       <li id="FIN"> <a href="MostrarFINCuentasPorPagar.php">Mostrar</a></li>
                    </ul>
                   </li>
                <li id="FIN"> <a href="">Cuentas Por Cobrar
</a>
                    <ul>
                       <li id="FIN"> <a href="InsertaFINCuentasPorCobrar.php">Insertar</a></li>
                       <li id="FIN"> <a href="ConsultaFINCuentasPorCobrar.php">Consultar</a></li>
                       <li id="FIN"> <a href="MostrarFINCuentasPorCobrar.php">Mostrar</a></li>
                    </ul>
                   </li>  
                   <li id="FIN" > <a href="">Egresos </a>
                     <ul>
                       <li id="FIN"> <a href="InsertaFINEgresos.php">Insertar</a></li>
                       <li id="FIN"> <a href="ConsultaFINEgresos.php">Consultar</a></li>
                       <li id="FIN"> <a href="MostrarFINEgresos.php">Mostrar</a></li>
                    </ul>                
                 </li>
                    <li id="FIN" > <a href="">Formas De Pago  </a>
                     <ul>
                       <li id="FIN"> <a href="InsertarFinformasdepago.php">Insertar</a></li>
                       <li id="FIN"> <a href="ConsultaFinFormasDePago.php">Consultar</a></li>
                       <li id="FIN"> <a href="Mostrarfinformasdepago.php">Mostrar</a></li>
                    </ul>                
                 </li> 
                    <li id="FIN" > <a href="">INgresos</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarFiningresos.php">Insertar</a></li>
                       <li id="FIN"> <a href="ConsultaFinIngresos.php">Consultar</a></li>
                       <li id="FIN"> <a href="Mostrarfiningresos.php">Mostrar</a></li>
                    </ul>                
                 </li>  
                         <li id="FIN" > <a href="">Metodo De Pago 
</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarFinmetodosdepago.php">Insertar</a></li>
                       <li id="FIN"> <a href="ConsultaFinMetodosDePago.php">Consultar</a></li>
                       <li id="FIN"> <a href="Mostrarfinformasdepago.php">Mostrar</a></li>
                    </ul>                
                 </li>        
            </ul>
          </li>







          </li>    
            
        </ul>
      </div>
  
    
</body>
</html>