<?php

	function calculoDC($nEntidad, $nOficina, $nNumCuenta){

		$dc = "";
    	$pesos = array(6, 3, 7, 9, 10, 5, 8, 4, 2, 1);

    foreach(array($nEntidad . $nOficina, $nNumCuenta) as $cadena){
        $suma = 0;
        for($i=0, $len=strlen($cadena); $i<$len; $i++){
            $suma += $pesos[$i] * substr($cadena, $len-$i-1, 1);
        }
        $digito = 11-$suma%11;
        if($digito==11){
            $digito = 0;
        }elseif($digito==10){
            $digito = 1;
        }
        $dc .= $digito;
    }

    return $dc;
	
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Verificación de Cuenta Corriente Cliente</title>
</head>
<body>
	<p>El número de cuenta corriente <?=$codigoCuentaCliente?></p>
	
</body>
</html>