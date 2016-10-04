<?php
	if (isset($_POST['registrar'])){
		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$edad = $_POST['edad'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];
		$nota3 = $_POST['nota3'];

		$controlador = new controladorEstudiantes();

		$resultado = $controlador->crear($cedula, $nombre, $apellido, $telefono, $edad, $nota1, $nota2, $nota3);
		if ($resultado>0){
			header('Location: index.php?res=1');
		}else{
			header('Location: index.php?res=3');
		}
	}
?>
<h3>Crear Registro Nuevo de Estudiante</h3>
<hr>
<form action="" method="post">
	<table border="1" id="tabla50">
		<tr>
			<th>
			Cedula	
			</th>
			<td>
				<input type="number" id="input" name="cedula" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Nombre	
			</th>
			<td>
				<input type="text" id="input" name="nombre" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Apellido	
			</th>
			<td>
				<input type="text" id="input" name="apellido" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Telefono	
			</th>
			<td>
				<input type="number" id="input" name="telefono" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Edad	
			</th>
			<td>
				<input type="number" id="input" name="edad" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Nota 1	
			</th>
			<td>
				<input type="number" id="input" name="nota1" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Nota 2	
			</th>
			<td>
				<input type="number" id="input" name="nota2" required="required">
			</td>
		</tr>
		<tr>
			<th>
			Nota 3	
			</th>
			<td>
				<input type="number" id="input" name="nota3" required="required">
			</td>
		</tr>
		<tr>
			<td colspan="2"><div align="center">
				<button type="submit" name="registrar">Registrar</button>
				<button type="reset">Reiniciar</button>
			</div>
			</td>
		</tr>
	</table>

</form>
<hr>
<p><a href="./">Regresar al Inicio</a></p>
