<?php
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
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$controlador = new controladorEstudiantes();

		$result = $controlador -> eliminar($id);

		if(isset($result)){
			header('Location: index.php?res=6');
		}else{
			header('Location: index.php?res=4');
		}
	}
?>