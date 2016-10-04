<?php
include_once ('Conexion.php');

	class Estudiantes{
		//Atributos
		private $id;
		private $cedula;
		private $nombre;
		private $apellido;
		private $telefono;
		private $edad;
		private $promedio;
		
		private $con;

		//Metodos
		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->atributo;
		}

		public function crearRegistro(){
			$sql2 = "SELECT * FROM `estudiantes` WHERE `cedula` = '{$this->cedula}'";
			$sqlValidar = $this->con->consultaRetorno($sql2);
			$num = mysqli_num_rows($sqlValidar);
			if($num!=0){
				return false;
			}else{
				$sql = "INSERT INTO `estudiantes` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `edad`, `promedio`, `fecha`) VALUES (NULL, '{$this->cedula}', '{$this->nombre}', '{$this->apellido}', '{$this->telefono}', '{$this->edad}', '{$this->promedio}', NOW())";
				$this->con->consultaRetorno($sql);
				return true;
			}
		}

		public function eliminarRegistro(){
			$sql = "DELETE FROM `estudiantes` WHERE `id` = '{$this->id}'";
			$this->con->consultaRetorno($sql);
		}

		public function verRegistro(){
			$sql = "SELECT * FROM `estudiantes` WHERE `id` = '{$this->id}' LIMIT 1";

			$sqlVer = $this->con->consultaRetorno($sql);
			$num = mysqli_num_rows($sqlVer);
			if ($num == 0){
				return false;
				die();
			}

			$row = mysqli_fetch_assoc($sqlVer);
			//Set
			$this->id = $row['id'];
			$this->cedula = $row['cedula'];
			$this->nombre = $row['nombre'];
			$this->apellido = $row['apellido'];
			$this->telefono = $row['telefono'];
			$this->edad = $row['edad'];
			$this->promedio = $row['promedio'];
			$this->fecha = $row['fecha'];

			return $row;
		}

		public function consultarRegistro(){
			$sql = "SELECT * FROM `estudiantes` WHERE `id` = '{$this->id}' LIMIT 1";
			$sqlVer = $this->con->consultaRetorno($sql);
			return $sqlVer;
		}

		public function editarRegistro(){

			// No se edita los campos id y fecha 
			$sql = "UPDATE `estudiantes` SET `cedula` = '{$this->cedula}', `nombre` = '{$this->nombre}', `apellido` = '{$this->apellido}', `telefono` = '{$this->telefono}', `edad` = '{$this->edad}', `promedio` = '{$this->promedio}' WHERE `estudiantes`.`id` = '{$this->id}'";

			$resultado = $this->con->consultaRetorno($sql);

			return $resultado;
		}

		public function listarRegistros(){
			$sql = "SELECT * FROM `estudiantes` ORDER BY `cedula` ASC";
			$sqlListar = $this->con->consultaRetorno($sql);
			return $sqlListar;
		}
	}
?>