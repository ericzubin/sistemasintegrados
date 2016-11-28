<?php
if ($_POST["generar_factura"] == "true")
{

$proveedor = $_POST['proveedor'];
$Stock = $_POST['Stock'];

$conexion = mysqli_connect('localhost','root','tallerphp','limpieza');

    if(!$conexion){
      echo "oh no, hay un error";
    }
  
$fecha = date("Y/m/d");

getdate ($timestamp);






require('fpdf.php');
$pdf = new FPDF('P','mm',array(350,58));
$pdf->AddPage();
// Logo

$pdf->SetFont('Arial','B',14);
 $pdf->SetXY(3, 5);
$pdf->Cell(0, 0,'"Orden De Pedido"');

$pdf->ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(39, 5);
//$pdf->Write(0, $timestamp);
$pdf->SetXY(30, 10);
$pdf->Write(0, date('d/m/Y'));


$pdf->SetFont('Arial','B',8);  
$pdf->SetXY(0, 16);
$pdf->Cell(0,0, "-----------------------------------------------------------------------------");


 $pdf->SetFont('Arial','B',8);  

$pdf->SetX(4);

 $pdf->Cell(16,6, "Existencia");
 
 $pdf->Cell(14,6, "Producto");
 
 
  
 
$pdf->SetXY(0, 22);
$pdf->Cell(0,0, "--------------------------------------------------------------------------");
$pdf->ln(3);

$conexion = mysql_connect("localhost", "root", "tallerphp");
mysql_select_db("limpieza",$conexion); 
$compra = mysql_query("select Stock, nombre from productos where  proveedor like '%".$proveedor."%' AND Stock < ".$Stock."", $conexion) or die(mysql_error());
while ($fila = mysql_fetch_array($compra)){

$pdf->SetX(3);
$pdf->Cell(44, 3,$fila[Stock],0);
$pdf->SetX(6);
$pdf->Cell(6, 3,$fila[nombre],0);
$pdf->SetX(27);

$pdf->ln(3);
}
$pdf->ln(3);
 $pdf->SetX(0);
$pdf->Cell(0,0, "--------------------------------------------------------------------------");

$pdf->Output();

}

?>


