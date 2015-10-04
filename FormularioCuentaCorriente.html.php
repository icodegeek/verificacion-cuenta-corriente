<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Cuenta Corriente</title>
</head>
<body>
	<h1>Introduzca los datos de la Cuenta Corriente:</h1>
	<form name="datosbancarios" action="tu_action" method="post" onsubmit="return validar()" >
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
					<input type="text" id="entidad" name="entidad" required    placeholder="entidad" maxlength="4" id="entidad" pattern="[0-9]{4}" title="El campo entidad debe tener 4 dígitos"/>
				 	</td>
				<td>
					<input type="text" id="oficina" name="oficina" required placeholder="oficina" maxlength="4" id="oficina" pattern="[0-9]{4}" title="El campo oficina debe tener 4 dígitos"/>
				 	</td>
				 	<td>
					<input type="text" id="dc" name="dc" required placeholder="dc" maxlength="2" id="dc" pattern="[0-9]{2}" title="El campo dígito de control debe tener 2 dígitos"/>
				 	</td>
				 	<td>
					<input type="text" id="cuenta" name="cuenta" required placeholder="cuenta" maxlength="10" id="cuenta" pattern="[0-9]{10}" title="El campo cuenta debe tener 10 dígitos"/>
				 	</td>
 
				<td><button class="boton-envio" type="submit">Enviar datos</button> 
				</td>
			</tr>
	</table>
	</form> 
</body>
</html>