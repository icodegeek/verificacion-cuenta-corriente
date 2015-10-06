<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario Cuenta Corriente</title>
</head>
<body>
	<h1>Introduzca los datos de la Cuenta Corriente:</h1>
	<form action="index.php" method="post">
	<table class="table">
		<thead>
			<tr>
			<th>Entidad</th>
			<th>Oficina</th>
			<th>DC</th>
			<th>Número de cuenta</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<input type="text" id="nEntidad" name="nEntidad" required    placeholder="entidad" maxlength="4" id="nEntidad" pattern="[0-9]{4}" title="El campo entidad debe tener 4 dígitos"/>
				 	</td>
				<td>
					<input type="text" id="nOficina" name="nOficina" required placeholder="oficina" maxlength="4" id="nOficina" pattern="[0-9]{4}" title="El campo oficina debe tener 4 dígitos"/>
				 	</td>
				 	<td>
					<input type="text" id="nDC" name="nDC" required placeholder="dc" maxlength="2" id="nDC" pattern="[0-9]{2}" title="El campo dígito de control debe tener 2 dígitos"/>
				 	</td>
				 	<td>
					<input type="text" id="nCuenta" name="nCuenta" required placeholder="cuenta" maxlength="10" id="nCuenta" pattern="[0-9]{10}" title="El campo cuenta debe tener 10 dígitos"/>
				 	</td>
 
				<td><button class="boton-envio" type="submit">Verificar datos</button> 
				</td>
			</tr>
	</table>
	</form> 
</body>
</html>