<h3>Ver Registro de Estudiante</h3>

<?php
if(isset($_GET['id'])){
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

	$controlador = new controladorEstudiantes();
	$row = $controlador -> ver("id", $_GET['id']);
	if(isset($row)){
		echo '<table border="1" id="tabla50">';
		echo '<tr><td>Cedula = '.$row['cedula'].'</li></td></tr>';
		echo '<tr><td>Nombre = '.$row['nombre'].'</li></td></tr>';
		echo '<tr><td>Apellido = '.$row['apellido'].'</li></td></tr>';
		echo '<tr><td>Edad = '.$row['edad'].'</li></td></tr>';
		echo '<tr><td>Promedio = '.$row['promedio'].'</li></td></tr>';
		echo '<tr><td>Telefono = '.$row['telefono'].'</li></td></tr>';
		echo '</table>';
	}else{
		header('Location: index.php?res=4');
	}
}else{
	header('Location: index.php?res=2');
}
?>
<hr>
<p><a href="./">Regresar al Inicio</a></p>