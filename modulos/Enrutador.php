<?php 
class Enrutador{
	public function cargarVista($vista){
		if(!isset($vista)){
			include_once('vistas/inicio.php');
		}else{
			switch($vista){
				case 'inicio' || 'ver' || 'mod' || 'del' || 'crear':
					include_once('vistas/'.$vista.'.php');
				break;
				default:
					include_once('vistas/error.php');
				break;
			}// fin del switch($vista)
		} // fin del else
	} // fin function cargarVista
} // fin class Enrutador
?>