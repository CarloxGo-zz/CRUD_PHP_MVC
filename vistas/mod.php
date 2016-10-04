<?php
	if(isset($_POST['modificar'])){
			/*
	Hay una medida de seguridad que me gusta implementar y es validar la
	procedencia de los datos a ser tomados como referencias, para esto se
	agrega al comienzo del script la siguente línea, ya sea fusionada con
	la validación de variables o sola:
	
	&& $_SERVER['PHP_SELF'] == '[http://www.miservidor]/index.php'){

	La diracción indicada sólo es aplicable a este ejemplo, cada caso
	deberá ser modificado según la ruta que se quiera tomas como válida.

	Con esto trato de garantizar la posibilidad de ataques por acceso con
	datos manipulados
	*/
		$id = $_POST['id'];
		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$edad = $_POST['edad'];
		$promedio = $_POST['promedio'];
		$cedula_vieja = $_POST['cedula_vieja'];

		$controlador = new controladorEstudiantes();

		$result = $controlador -> editar($id, $cedula_vieja, $cedula, $nombre, $apellido, $telefono, $edad, $promedio);
		if(isset($result)){
			header('Location: index.php?res=5');
		}else{
			header('Location: index.php?res=4');
		}
	}

echo '<h3>Modificar Registro de Estudiante</h3>'; 
	
	if(isset($_GET['id'])){
		$controlador = new controladorEstudiantes();
		$row = $controlador -> ver("id", $_GET['id']);

		if(isset($row)){
			echo '<form action="" method="post" id="tabla50">';
			echo '<table border="1">';
			echo '<tr><th width="50%">Cedula</ht><td><input type ="number" name = "cedula" value = "'.$row['cedula'].'" required="required"></td><tr>';
			echo '<tr><th>Nombre</ht><td><input type ="text" name = "nombre" value = "'.$row['nombre'].'" required="required"></td><tr>';
			echo '<tr><th>Apellido</ht><td><input type ="text" name = "apellido" value="'.$row['apellido'].'" required="required"></td><tr>';
			echo '<tr><th>Edad</ht><td><input type ="text" name="edad" value="'.$row['edad'].'" required="required"></td><tr>';
			echo '<tr><th>Promedio</ht><td><input type ="number" name="promedio" value="'.$row['promedio'].'" required="required"></td><tr>';
			echo '<tr><th>Telefono</ht><td><input type ="number" name="telefono" value="'.$row['telefono'].'" required="required"></td><tr>';
			echo '<tr align="center"><td colspan="2"><button type="submit" name="modificar">Modificar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" name="reiniciar">Reiniciar</button></td><tr>';
			echo '</table>';
			echo '<input type ="hidden" name="cedula_vieja" value="'.$row['cedula'].'"><input type ="hidden" name="id" value="'.$row['id'].'">';
			echo '</form>';
		}else{
			header('Location: index.php?res=4');
		}
	}else{
		header('Location: index.php?res=2');
	}
?>