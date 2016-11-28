<?php
$fusuario=$_POST["usuario"];
$fpass=$_POST["pass"];

$Conexion = mysqli_connect("localhost", "root", "", "sistemasintegrados2016");
$query= mysqli_query($Conexion, "SELECT * FROM syscuentas WHERE IdCuenta= '$fusuario' AND Password ='$fpass'");
//0 bloqueado 1 activo
$acceso = mysqli_num_rows($query);

if($acceso == 1){
	$fila=mysqli_fetch_row($query);
	$status = $fila[4];
	if($status==1){
		$query2 = mysqli_query($Conexion, "UPDATE syscuentas SET intentos = 0 WHERE IdCuenta= '$fusuario'");
		$tipocuenta = $fila[2];
		if($tipocuenta == "Admin"){
			//Iniciamos la sesion
			session_start();
			$_SESSION['fecha_ingreso'] = time();
			$_SESSION['idioma'] = "es";

		$query2 = mysqli_query($Conexion, "UPDATE syscuentas SET FechaUltimoAcceso = now() WHERE IdCuenta= '$fusuario'");

			$_SESSION['fecha_ingreso'] = time();
			$_SESSION['tipoUser'] = "Admin";

			header("Location: menuAdmin.php");
		}else{
				//Iniciamos la sesion
			session_start();
			$_SESSION['fecha_ingreso'] = time();
			$_SESSION['tipoUser'] = "User";
			$_SESSION['idioma'] = "es";


			header("Location: menuUser.php");
		}
	}else{
		print("USUARIO BLOQUEADO");
	}
}else{
	$fila=mysqli_fetch_row($query);
	if($fila[3]>=3){
		print("LIMITE DE INTENTOS EXCEDIDO CUENTA BLOQUEDA FAVOR DE CONSULTAR CON EL ADMINISTRADOR");
		$query2 = mysqli_query($Conexion, "UPDATE syscuentas SET status = 0 WHERE IdCuenta= '$fusuario'");
		$query2 = mysqli_query($Conexion, "UPDATE syscuentas SET intentos = intentos+1 WHERE IdCuenta= '$fusuario'");
	}else{
		print("ACCESO INCORRECTO");
		$query2 = mysqli_query($Conexion, "UPDATE syscuentas SET intentos = intentos+1 WHERE IdCuenta= '$fusuario'");
	}	
}
?>

