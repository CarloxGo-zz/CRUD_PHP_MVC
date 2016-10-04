<?php
	class Conexion{
		// Atributos
		private $host;
		private $user;
		private $pass;
		public $bd;
		public $enlace;

		//Metodos
		public function __construct(){
			$this->host = 'localhost';
			$this->user	= 'root';
			$this->pass = '';
			$this->bd = 'crud_poo';
			//enlace al servidor y a la BD
			$this->enlace = mysqli_connect($this->host, $this->user, $this->pass, $this->bd) or die('Error de conexi&oacute;n a la base de datos debido a: '.mysqli_error());
		}

		public function __destruct(){
			mysqli_close($this->enlace) or die ('No se pudo enlazar con la tabla debido a: '.mysqli_error());
		}

		public function consultaRetorno($sql){
			$consulta = mysqli_query($this->enlace, $sql) or die ('No se pudo enlazar con la tabla debido a: '.mysqli_error());
			return $consulta;
		}
	}
?>