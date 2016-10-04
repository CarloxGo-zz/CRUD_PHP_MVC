<?php 
	include_once('clases/Conexion.php');
	include_once('modulos/Enrutador.php');
	include_once('modulos/Controlador.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRUD POO con PHP</title>
	<script language="JavaScript" type="text/javascript">
		var pagina="index.php"
		function redireccionar(){
			location.href=pagina
		}
	</script>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header>M&Oacute;DULO CRUD - POO con PHP</header>
	<nav>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="?cargar=crear">Incluir registro</a></p></li>	
	</ul>
	</nav>
	<section id="vistas">
		<?php 
			$enrutador = new Enrutador();
			if(isset($_GET['cargar'])){
				$enrutador->cargarVista($_GET['cargar']);
			}else{
				$enrutador->cargarVista('inicio');
			}
		?>
	</section>
	<footer>
		Sistema Supercodigo
	</footer>
	<?php
	if(isset($_GET['res']) && !isset($res)) $res = $_GET['res'];
		include('modulos/mensajes.php');
	?>
</body>
</html>