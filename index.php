<?php

	if ((empty($_POST['nEntidad']) && strlen($_POST['nEntidad']) != 4) || (empty($_POST['nOficina']) && strlen($_POST['nOficina']) != 4) || (empty($_POST['nDC']) && strlen($_POST['nDC']) != 2) || (empty($_POST['nNumCuenta']) && strlen($_POST['nNumCuenta']) != 10)) {
		
		include 'FormularioCuentaCorriente.html.php';
	
	}else{

		$nEntidad = $_POST['nEntidad'];
		$nOficina = $_POST['nOficina'];
		$nDC = $_POST['nDC'];
		$nNumCuenta = $_POST['nNumCuenta'];

		$codigoCuentaCliente = $nEntidad . "-" . $nOficina . "-" . $nDC . "-" . $nNumCuenta;

		include 'validacion.html.php';

	}

