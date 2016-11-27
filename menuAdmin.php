<?php

  require_once('funciones/sesiones.php'); 
  validaSesion();
  $TipoUser=obtenerTipoUsuario();
  if($TipoUser=="Admin")
  {

  }else
  {
      header("Location: login.html");
  }
   
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
            	<li id="SYS"> <a href="">Cuentas</a>
                	  <ul>
                       <li id="SYS"> <a href="insertarSYSCuentas.php">Insertar</a></li>
                       <li id="SYS"> <a href="EliminarSYSCuentas.php">Eliminar</a></li>
                       <li id="SYS"> <a href="ActualizarSYSCuentas.php">Actualizar</a></li>
                       <li id="SYS"> <a href="MostrarSYSCuentas.php">Mostrar</a></li>
                    </ul>
                 </li>
                <li id="SYS" > <a href="">Permisos</a>
                     <ul>
                       <li id="SYS"> <a href="insertarSYSPermiso.php">Insertar</a></li>
                       <li id="SYS"> <a href="EliminarSYSPermiso.php">Eliminar</a></li>
                       <li id="SYS"> <a href="ActualizarSYSPermiso.php">Actualizar</a></li>
                       <li id="SYS"> <a href="MostrarSYSPermiso.php">Mostrar</a></li>
                    </ul>                
                 </li>   
                   <li id="SYS" > <a href="">Tipos Cuentas</a>
                     <ul>
                       <li id="SYS"> <a href="InsertarSYTiposCuentas.php">Insertar</a></li>
                       <li id="SYS"> <a href="EliminarSYTiposCuentas.php">Eliminar</a></li>
                       <li id="SYS"> <a href="ActualizarSYTiposCuentas.php">Actualizar</a></li>
                       <li id="SYS"> <a href="MostrarSYTiposCuentas.php">Mostrar</a></li>
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
                  <li id="RH"> <a href="">Surcusales</a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHSurcusales.php">Insertar</a></li>
                       <li id="RH"> <a href="EliminarRHSurcusales.php">Eliminar</a></li>
                       <li id="RH"> <a href="ActualizarRHSurcusales.php">Actualizar</a></li>
                       <li id="RH"> <a href="MostrarRHSurcusales.php">Mostrar</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Turnos</a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHTurnos.php">Insertar</a></li>
                       <li id="RH"> <a href="EliminarRHTurnos.php">Eliminar</a></li>
                       <li id="RH"> <a href="ActualizarRHTurnos.php">Actualizar</a></li>
                       <li id="RH"> <a href="MostrarRHTurnos.php">Mostrar</a></li>
                    </ul>
                 </li>
              </ul>
          </li>
          <li id="COM"><a href="">COM</a>
              <ul>

                <li id="COM"> <a href="">Compras</a>
                    <ul>
                       <li id="COM"> <a href="InsertarCOMCompras.php">Insertar</a></li>
                       <li id="COM"> <a href="EliminarCOMCompras.php">Eliminar</a></li>
                       <li id="COM"> <a href="ActualizarCOMCompras.php">Actualizar</a></li>
                       <li id="COM"> <a href="MostrarCOMCompras.php">Mostrar</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Detalle Compras</a>
                    <ul>
                       <li id="COM"> <a href="InsertarCOMDetalleCompras.php">Insertar</a></li>
                       <li id="COM"> <a href="EliminarCOMDetalleCompras.php">Eliminar</a></li>
                       <li id="COM"> <a href="ActualizarCOMDetalleCompras.php">Actualizar</a></li>
                       <li id="COM"> <a href="MostrarCOMDetalleCompras.php">Mostrar</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Pedidos</a>
                    <ul>
                       <li id="COM"> <a href="InsertarCOMPedidos.php">Insertar</a></li>
                       <li id="COM"> <a href="EliminarCOMPedidos.php">Eliminar</a></li>
                       <li id="COM"> <a href="ActualizarCOMPedidos.php">Actualizar</a></li>
                       <li id="COM"> <a href="MostrarCOMPedidos.php">Mostrar</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Proveedores</a>
                    <ul>
                       <li id="COM"> <a href="InsertarCOMProveedores.php">Insertar</a></li>
                       <li id="COM"> <a href="EliminarCOMProveedores.php">Eliminar</a></li>
                       <li id="COM"> <a href="ActualizarCOMProveedores.php">Actualizar</a></li>
                       <li id="COM"> <a href="MostrarCOMProveedores.php">Mostrar</a></li>
                    </ul>
                </li>


            </ul>

          </li>
             
          <li id="VEN"><a href="">VEN</a>
              <ul>

                 <li id="VEN"> <a href="">Clientes</a>
                    <ul>
                       <li id="VEN"> <a href="InsertarVENClientes.php">Insertar</a></li>
                       <li id="VEN"> <a href="EliminarVENClientes.php">Eliminar</a></li>
                       <li id="VEN"> <a href="ActualizarVENClientes.php">Actualizar</a></li>
                       <li id="VEN"> <a href="MostrarVENClientes.php">Mostrar</a></li>
                    </ul>

              </li>
              <li id="VEN"> <a href="">Detalle Ventas</a>
                    <ul>
                       <li id="VEN"> <a href="InsertarVENDetalleVentas.php">Insertar</a></li>
                       <li id="VEN"> <a href="EliminarVENDetalleVentas.php">Eliminar</a></li>
                       <li id="VEN"> <a href="ActualizarVENDetalleVentas.php">Actualizar</a></li>
                       <li id="VEN"> <a href="MostrarVENDetalleVentas.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="VEN"> <a href="">Devoluciones</a>
                    <ul>
                       <li id="VEN"> <a href="InsertarVENDevoluciones.php">Insertar</a></li>
                       <li id="VEN"> <a href="EliminarVENDevoluciones.php">Eliminar</a></li>
                       <li id="VEN"> <a href="ActualizarVENDevoluciones.php">Actualizar</a></li>
                       <li id="VEN"> <a href="MostrarVENDevoluciones.php">Mostrar</a></li>
                    </ul>
                    
              </li>
                 <li id="VEN"> <a href="">Ventas</a>
                    <ul>
                       <li id="VEN"> <a href="InsertarVENVentas.php">Insertar</a></li>
                       <li id="VEN"> <a href="EliminarVENVentas.php">Eliminar</a></li>
                       <li id="VEN"> <a href="ActualizarVENVentas.php">Actualizar</a></li>
                       <li id="VEN"> <a href="MostrarVENVentas.php">Mostrar</a></li>
                    </ul>
                    
              </li>

            </ul>

          </li>


          <li id="LOG"><a href="">LOG</a>
            <ul>
              <li id="LOG"> <a href="">Entregas</a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGEntregas.php">Insertar</a></li>
                       <li id="LOG"> <a href="EliminarLOGEntregas.php">Eliminar</a></li>
                       <li id="LOG"> <a href="ActualizarLOGEntregas.php">Actualizar</a></li>
                       <li id="LOG"> <a href="MostrarLOGEntregas.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="LOG"> <a href="">Envios</a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGEnvios.php">Insertar</a></li>
                       <li id="LOG"> <a href="ConsultaLogEntregas.php">Consultar</a></li>
                       <li id="LOG"> <a href="MostrarLOGEnvios.php">Mostrar</a></li>
                    </ul>
                    
              </li>
              <li id="LOG"> <a href="">Formas De Envio</a>
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
                       <li id="INV"> <a href="InsertarINVActivosFijos.php">Insertar</a></li>
                       <li id="INV"> <a href="EliminarINVActivosFijos.php">Eliminar</a></li>
                       <li id="INV"> <a href="ActualizarINVActivosFijos.php">Actualizar</a></li>
                       <li id="INV"> <a href="MostrarINVActivosFijos.php">Mostrar</a></li>
                    </ul>
                    
              </li>
                <li id="INV"> <a href="">CAtegorias Productos</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVCategoriasProductos.php">Insertar</a></li>
                       <li id="INV"> <a href="EliminarINVCategoriasProductos.php">Eliminar</a></li>
                       <li id="INV"> <a href="ActualizarINVCategoriasProductos.php">Actualizar</a></li>
                       <li id="INV"> <a href="MostrarINVCategoriasProductos.php">Mostrar</a></li>
                    </ul>
                    
              </li>
                <li id="INV"> <a href="">Nominas</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVNominas.php">Insertar</a></li>
                       <li id="INV"> <a href="EliminarINVNominas.php">Eliminar</a></li>
                       <li id="INV"> <a href="ActualizarINVNominas.php">Actualizar</a></li>
                       <li id="INV"> <a href="MostrarINVNominas.php">Mostrar</a></li>
                    </ul>
                    
              </li>
               <li id="INV"> <a href="">Productos</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVProductos.php">Insertar</a></li>
                       <li id="INV"> <a href="EliminarINVProductos.php">Eliminar</a></li>
                       <li id="INV"> <a href="ActualizarINVProductos.php">Actualizar</a></li>
                       <li id="INV"> <a href="MostrarINVProductos.php">Mostrar</a></li>
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
                  <li id="FIN"> <a href="">CuentasPorPagar</a>
                    <ul>
                       <li id="FIN"> <a href="InsertarSYSCuentasPorPagar.php">Insertar</a></li>
                       <li id="FIN"> <a href="EliminarSYSCuentasPorPagar.php">Eliminar</a></li>
                       <li id="FIN"> <a href="ActualizarSYSCuentasPorPagar.php">Actualizar</a></li>
                       <li id="FIN"> <a href="MostrarSYSCuentasPorPagar.php">Mostrar</a></li>
                    </ul>
                   </li>
                <li id="FIN"> <a href="">Cuentas Por Cobrar</a>
                    <ul>
                       <li id="FIN"> <a href="InsertarSYSCuentasPorCobrar.php">Insertar</a></li>
                       <li id="FIN"> <a href="EliminarSYSCuentasPorCobrar.php">Eliminar</a></li>
                       <li id="FIN"> <a href="ActualizarSYSCuentasPorCobrar.php">Actualizar</a></li>
                       <li id="FIN"> <a href="MostrarSYSCuentasPorCobrar.php">Mostrar</a></li>
                    </ul>
                   </li>  
                   <li id="FIN" > <a href="">Egresos</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarSYSEgresos.php">Insertar</a></li>
                       <li id="FIN"> <a href="EliminarSYSEgresos.php">Eliminar</a></li>
                       <li id="FIN"> <a href="ActualizarSYSEgresos.php">Actualizar</a></li>
                       <li id="FIN"> <a href="MostrarSYSEgresos.php">Mostrar</a></li>
                    </ul>                
                 </li>
                    <li id="FIN" > <a href="">Formas De Pago</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarSYSFormasDePago.php">Insertar</a></li>
                       <li id="FIN"> <a href="EliminarSYSFormasDePago.php">Eliminar</a></li>
                       <li id="FIN"> <a href="ActualizarSYSFormasDePago.php">Actualizar</a></li>
                       <li id="FIN"> <a href="MostrarSYSFormasDePago.php">Mostrar</a></li>
                    </ul>                
                 </li> 
                    <li id="FIN" > <a href="">Ingresos</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarSYSINgresos.php">Insertar</a></li>
                       <li id="FIN"> <a href="EliminarSYSINgresos.php">Eliminar</a></li>
                       <li id="FIN"> <a href="ActualizarSYSINgresos.php">Actualizar</a></li>
                       <li id="FIN"> <a href="MostrarSYSINgresos.php">Mostrar</a></li>
                    </ul>                
                 </li>  
                         <li id="FIN" > <a href="">Metodo De Pago</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarSYSMetodoDePago.php">Insertar</a></li>
                       <li id="FIN"> <a href="EliminarSYSMetodoDePago.php">Eliminar</a></li>
                       <li id="FIN"> <a href="ActualizarSYSMetodoDePago.php">Actualizar</a></li>
                       <li id="FIN"> <a href="MostrarSYSMetodoDePago.php">Mostrar</a></li>
                    </ul>                
                 </li>        
            </ul>
          </li>







          </li>               
        </ul>
      </div>
</body>
</html>