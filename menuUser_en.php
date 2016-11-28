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
                <li id="SYS" > <a href=""> Permits</a>
                     <ul>
                       <li id="SYS"> <a href="insertPerrmisos.php">Insert</a></li>
                       <li id="SYS"> <a href="EliminarSYSPermiso.php">Consult</a></li>
                       <li id="SYS"> <a href="MostrarSYSPermiso.php">To show</a></li>
                    </ul>                
                 </li>   
                   <li id="SYS" > <a href="">Types Accounts</a>
                     <ul>
                        <li id="SYS"> <a href="insertTiposCuentas.php">Insert</a></li>
                       <li id="SYS"> <a href="ConsultaSysTiposCuentas.php">Consult</a></li>
                       <li id="SYS"> <a href="MuestraSysTiposCuentas.php">To show</a></li>
                    </ul>                
                 </li>     
            </ul>
          </li>
          <li id="RH"><a href="">RH</a>
              <ul>

                <li id="RH"> <a href=""> Departments </a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHDepartamentos.php">Insert</a></li>
                       <li id="RH"> <a href="ConsultaRhDepartamentos.php">Consult</a></li>
                       <li id="RH"> <a href="MostrarRHDepartamentos.php">To show</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href=""> Employees </a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHEmpleados.php">Insert</a></li>
                       <li id="RH"> <a href="ConsultaRhEmpleados.php">Consult</a></li>
                       <li id="RH"> <a href="MostrarRHEmpleados.php">To show</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Posts </a>
                    <ul>
                       <li id="RH"> <a href="InsertarRHPuestos.php">Insert</a></li>
                       <li id="RH"> <a href="ConsultaRhPuestos.php">Consult</a></li>
                       <li id="RH"> <a href="MostrarRHPuestos.php">To show</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Branch offices</a>
                    <ul>
                       <li id="RH"> <a href="insertaRHSurcusales.php">Insert</a></li>
                       <li id="RH"> <a href="ConsultaRhSurcusales.php">Consult</a></li>
                       <li id="RH"> <a href="MuestraRhSurcusales.php">To show</a></li>
                    </ul>
                 </li>
                  <li id="RH"> <a href="">Work shifts</a>
                    <ul>
                       <li id="RH"> <a href="insertaRHTurnos.php">Insert</a></li>
                       <li id="RH"> <a href="ConsultaRhTurnos.php">Consult</a></li>
                       <li id="RH"> <a href="MuestraRhTurnos.php">To show</a></li>
                    </ul>
                 </li>
              </ul>
          </li>
          <li id="COM"><a href="">COM</a>
              <ul>

                <li id="COM"> <a href="">Purchases </a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMCompras.php">Insert</a></li>
                       <li id="COM"> <a href="ConsultaCOMCompras.php">Consult</a></li>
                       <li id="COM"> <a href="MostrarCOMCompras.php">To show</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Shopping Detail</a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMDetalleCompras.php">Insert</a></li>
                       <li id="COM"> <a href="ConsultaCOMDetalleCompras.php">Consult</a></li>
                       <li id="COM"> <a href="MostrarCOMDetalleCompras.php">To show</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">cash order </a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMPedidos.php">Insert</a></li>
                       <li id="COM"> <a href="ConsultaCOMPedidos.php">Consult</a></li>
                       <li id="COM"> <a href="MostrarCOMPedidos.php">To show</a></li>
                    </ul>
                </li>
                <li id="COM"> <a href="">Proveedores</a>
                    <ul>
                       <li id="COM"> <a href="InsertaCOMProveedores.php">Insert</a></li>
                       <li id="COM"> <a href="ConsultaCOMProveedores.php">Consult</a></li>
                       <li id="COM"> <a href="MostrarCOMProveedores.php">To show</a></li>
                    </ul>
                </li>


            </ul>

          </li>
             
          <li id="VEN"><a href="">VEN</a>
              <ul>

                 <li id="VEN"> <a href="">customers </a>
                    <ul>
                       <li id="VEN"> <a href="insertClientes.php">Insert</a></li>
                       <li id="VEN"> <a href="ConsultaVenClientes.php">Consult</a></li>
                       <li id="VEN"> <a href="MuestraVenClientes.php">To show</a></li>
                    </ul>

              </li>
              <li id="VEN"> <a href="">Sales Detail </a>
                    <ul>
                       <li id="VEN"> <a href="insertDetalleVentas.php">Insert</a></li>
                       <li id="VEN"> <a href="ConsultaVenDetalleVentas.php">Consult</a></li>
                       <li id="VEN"> <a href="MuestraVenDetalleVentas.php">To show</a></li>
                    </ul>
                    
              </li>
              <li id="VEN"> <a href=""> Returns </a>
                    <ul>
                      <li id="VEN"> <a href="insertaVENDevoluciones.php">Insert</a></li>
                       <li id="VEN"> <a href="ConsultaVenDevoluciones.php">Consult</a></li>
                       <li id="VEN"> <a href="MuestraVenDevoluciones.php">To show</a></li>
                    </ul>
                    
              </li>
                 <li id="VEN"> <a href="">Customer Service </a>
                    <ul>
                       <li id="VEN"> <a href="insertVentas.php">Insert</a></li>
                       <li id="VEN"> <a href="ConsultaVenVentas.php">Consult</a></li>
                       <li id="VEN"> <a href="MuestraVenVentas.php">To show</a></li>
                    </ul>
                    
              </li>

            </ul>

          </li>


          <li id="LOG"><a href="">LOG</a>
            <ul>
              <li id="LOG"> <a href="">Deliveries </a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGEntregas.php">Insert</a></li>
                       <li id="LOG"> <a href="ConsultaLogEntregas.php">Consult</a></li>
                       <li id="LOG"> <a href="MostrarLOGEntregas.php">To show</a></li>
                    </ul>
                    
              </li>
              <li id="LOG"> <a href="">Shipping </a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGEnvios.php">Insert</a></li>
                       <li id="LOG"> <a href="ConsultaLogEnvios.php">Consult</a></li>
                       <li id="LOG"> <a href="MostrarLOGEnvios.php">To show</a></li>
                    </ul>
                    
              </li>
              <li id="LOG"> <a href="">transport</a>
                    <ul>
                       <li id="LOG"> <a href="InsertarLOGFormasDeEnvio.php">Insert</a></li>
                       <li id="LOG"> <a href="ConsultaLogFormasDeEnvio.php">Consult</a></li>
                       <li id="LOG"> <a href="MostrarLOGFormasDeEnvio.php">To show</a></li>
                    </ul>
                    
              </li>



            </ul>


          </li>

          <li id="INV"><a href="">INV</a>
          <ul>
            <li id="INV"> <a href="">Fixed assets </a>
                    <ul>
                       <li id="INV"> <a href="InsertarInactivosfijos.php">Insert</a></li>
                       <li id="INV"> <a href="ConsultaInvActivosFijos.php">Consult</a></li>
                       <li id="INV"> <a href="Mostrarinactivosfijos.php">To show</a></li>
                    </ul>
                    
              </li>
                <li id="INV"> <a href="">Categories</a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVCategoriasProductos.php">Insert</a></li>
                       <li id="INV"> <a href="ConsultaInvCategoriasProductos.php">Consult</a></li>
                       <li id="INV"> <a href="MostrarINVCategoriasProductos.php">To show</a></li>
                    </ul>
                    
              </li>
                <li id="INV"> <a href="">Payroll </a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVNominas.php">Insert</a></li>
                       <li id="INV"> <a href="ConsultaInvNominas.php">Consult</a></li>
                       <li id="INV"> <a href="Mostrarinvnominas.php">To show</a></li>
                    </ul>
                    
              </li>
               <li id="INV"> <a href="">Products </a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVProductos.php">Insert</a></li>
                       <li id="INV"> <a href="ConsultaInvProductos.php">Consult</a></li>
                       <li id="INV"> <a href="Mostrarinproductos.php">To show</a></li>
                    </ul>
                    
              </li>
              <li id="INV"> <a href="">Supplies </a>
                    <ul>
                       <li id="INV"> <a href="InsertarINVSuministros.php">Insert</a></li>
                       <li id="INV"> <a href="ConsultaInvSuministros.php">Consult</a></li>
                       <li id="INV"> <a href="MostrarINVSuministros.php">To show</a></li>

                       
                    </ul>
                    
              </li>



            </ul>



            <li id="FIN"><a href="">FIN</a>
                <ul>
                  <li id="FIN"> <a href="">Debts to pay </a>
                    <ul>
                       <li id="FIN"> <a href="InsertaFINCuentasPorPagar.php">Insert</a></li>
                       <li id="FIN"> <a href="ConsultaFINCuentasPorPagar.php">Consult</a></li>
                       <li id="FIN"> <a href="MostrarFINCuentasPorPagar.php">To show</a></li>
                    </ul>
                   </li>
                <li id="FIN"> <a href=""> Accounts Receivable </a>
                    <ul>
                       <li id="FIN"> <a href="InsertaFINCuentasPorCobrar.php">Insert</a></li>
                       <li id="FIN"> <a href="ConsultaFINCuentasPorCobrar.php">Consult</a></li>
                       <li id="FIN"> <a href="MostrarFINCuentasPorCobrar.php">To show</a></li>
                    </ul>
                   </li>  
                   <li id="FIN" > <a href="">Expenses</a>
                     <ul>
                       <li id="FIN"> <a href="InsertaFINEgresos.php">Insert</a></li>
                       <li id="FIN"> <a href="ConsultaFINEgresos.php">Consult</a></li>
                       <li id="FIN"> <a href="MostrarFINEgresos.php">To show</a></li>
                    </ul>                
                 </li>
                    <li id="FIN" > <a href="">Payment Methods</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarFinformasdepago.php">Insert</a></li>
                       <li id="FIN"> <a href="ConsultaFinFormasDePago.php">Consult</a></li>
                       <li id="FIN"> <a href="Mostrarfinformasdepago.php">To show</a></li>
                    </ul>                
                 </li> 
                    <li id="FIN" > <a href="">Income</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarFiningresos.php">Insert</a></li>
                       <li id="FIN"> <a href="ConsultaFinIngresos.php">Consult</a></li>
                       <li id="FIN"> <a href="Mostrarfiningresos.php">To show</a></li>
                    </ul>                
                 </li>  
                         <li id="FIN" > <a href="">Payment method</a>
                     <ul>
                       <li id="FIN"> <a href="InsertarFinmetodosdepago.php">Insert</a></li>
                       <li id="FIN"> <a href="ConsultaFinMetodosDePago.php">Consult</a></li>
                       <li id="FIN"> <a href="Mostrarfinformasdepago.php">To show</a></li>
                    </ul>                
                 </li>        
            </ul>
          </li>







          </li>    
            
        </ul>
      </div>
  
    
</body>
</html>