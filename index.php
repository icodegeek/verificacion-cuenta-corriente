<?php

	if (empty($_POST['nEntidad']) || empty($_POST['nOficina']) || empty($_POST['nDC']) || empty($_POST['nNumCuenta'])) {
		
		include 'FormularioCuentaCorriente.html.php';
	
	}else{

		$nEntidad = $_POST['nEntidad'];
		$nOficina = $_POST['nOficina'];
		$nDC = $_POST['nDC'];
		$nNumCuenta = $_POST['nNumCuenta'];

		$codigoCuentaCliente = $nEntidad . ' - ' . $nOficina . ' - ' . $nDC . ' - ' . $nNumCuenta;

		include 'validacion.html.php';

	}

