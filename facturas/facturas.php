<?php
if ($_POST["generar_factura"] == "true")
{

$cantidad = $_POST['cantidad'];
$producto = $_POST['producto'];
$precioUnitario = $_POST['precioUnitario'];
$importe = $_POST['importe'];
$total = $_POST['total'];
$pago = $_POST['pago'];
$cambio = $pago - $total;
//$conexion = mysqli_connect('localhost','root','tallerphp','limpieza');
/*
    if(!$conexion){
      echo "oh no, hay un error";
    }
  */
$fecha = date("Y/m/d");

//getdate ($timestamp);


/*
$insert = "INSERT INTO venta( fecha, hora, total) VALUES ('" 
 .$fecha . "','" .$hora. "','" . $total . "');";
$conexion->query($insert);
*/

require('fpdf.php');
$pdf = new FPDF('P','mm',array(250,80));
$pdf->AddPage();
// Logo
//$pdf->Image('../logo.png',6,3,12);
$pdf->SetFont('Arial','',19);
 $pdf->SetXY(19, 5);
$pdf->Cell(0, 0,'"Ticket de');
$pdf->SetXY(19, 12);
$pdf->Cell(0, 0,'Compras"');
$pdf->SetXY(0, 10);
$pdf->ln(9);
$pdf->SetFont('Arial','',9);
$pdf->SetXY(39, 20);
//$pdf->Write(0, $timestamp);
$pdf->SetXY(49, 18);
$pdf->Write(0, date('d/m/Y'));
$pdf->SetFont('Arial','',9);
$pdf->SetXY(25, 23);
$pdf->Cell(0, 0,'R.F.C. RIMP6901034ZA');
$pdf->SetFont('Arial','',8);
$pdf->SetXY(20, 27);
$pdf->Cell(0, 0,utf8_decode('Régimen de Incorporación Fiscal.'));
$pdf->SetXY(20, 30);
$pdf->Cell(0, 0,utf8_decode('Circ.David Alfaro Siqueiros  No.114'));
$pdf->SetXY(20, 33);
$pdf->Cell(0, 0,utf8_decode('Col. Las Azucenas, Querétaro, Qro.'));

$pdf->ln(5);
$pdf->SetFont('Arial','',9);  
$pdf->SetXY(0, 36);
$pdf->Cell(0,0, "-----------------------------------------------------------------------------");


 $pdf->SetFont('Arial','',9);  

$pdf->SetX(4);

 $pdf->Cell(14,6, "Cant");
 
 $pdf->Cell(26,6, "Producto");
 
 $pdf->Cell(16,6, "Precio");
  
 $pdf->Cell(10,6, "Importe");
$pdf->SetXY(0, 42);
$pdf->Cell(0,0, "--------------------------------------------------------------------------");
$pdf->ln(8);
/*
$conexion = mysql_connect("localhost", "root", "tallerphp");
mysql_select_db("limpieza",$conexion); 
$compra = mysql_query("select * from detalle_compra", $conexion) or die(mysql_error());
while ($fila = mysql_fetch_array($compra)){
*/
$pdf->SetX(13);
$pdf->Cell(44, 3,$producto,0);
$pdf->ln(3);
$pdf->SetX(5);
$pdf->Cell(6, 3,$cantidad,0);
$pdf->SetX(47);
$pdf->Cell(8, 3,$precioUnitario,0);
$pdf->SetX(65);
$pdf->Cell(8, 3,$importe,0);
$pdf->ln(3);
}
$pdf->ln(3);
 $pdf->SetX(0);
$pdf->Cell(0,0, "--------------------------------------------------------------------------");
$pdf->ln(3);
 $pdf->SetX(50);
 $pdf->Write(0, "Total:{$total}");
 $pdf->ln(3);
 $pdf->SetX(50);  
 $pdf->Write(0, "Pago: {$pago}");
 $pdf->ln(3);
 $pdf->SetX(50);  
 $pdf->Write(0, "Cambio: {$cambio}");
 $pdf->ln(5);
 $pdf->SetX(5);  
 $pdf->Write(0, "Gracias por su Preferencia");
  
 
 $pdf->SetX(54);
$pdf->Cell(0,0, "* *");
$pdf->ln(2);
$pdf->SetX(52);
$pdf->Cell(0,0, "*");
$pdf->SetX(58);
$pdf->Cell(0,0, "*");
$pdf->ln(1);
$pdf->SetX(53);
$pdf->Cell(0,0, "*");
$pdf->SetX(57);
$pdf->Cell(0,0, "*");
$pdf->ln(1);
$pdf->SetX(54);
$pdf->Cell(0,0, "*");

$pdf->SetX(55);
$pdf->Cell(0,0, "*");
$pdf->SetX(56);
$pdf->Cell(0,0, "*");
$pdf->ln(1);
$pdf->Output();

//}

?>

<form action='venta.php'>
<?php
/*
$conex = mysqli_connect('localhost','root','tallerphp','limpieza');  
$nuevaCompra = "DELETE FROM detalle_compra WHERE 1";
 $resultadoNuevaVenta =mysqli_query($conex, $conuevaComprampra);
 $conex->query($nuevaCompra);
*/
?>
<input type="submit" value="nueva venta">
</form>
