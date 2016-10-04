<?php 
include_once('clases/Estudiantes.php');

class controladorEstudiantes{
	//Atributos
	private $estudiante;

	//Metodos
	public function __construct(){
		$this->estudiante = new Estudiantes();
	}
	
	public function index(){
		$resultado = $this->estudiante->listarRegistros();
		return $resultado;
	}

	public function crear($cedula, $nombre, $apellido, $telefono, $edad, $nota1, $nota2, $nota3){

		$promedio = ($nota1+$nota2+$nota3)/3;

		$this->estudiante->set("cedula", $cedula);
		$this->estudiante->set("nombre", $nombre);
		$this->estudiante->set("apellido", $apellido);
		$this->estudiante->set("telefono", $telefono);
		$this->estudiante->set("edad", $edad);
		$this->estudiante->set("promedio", $promedio);
		
		$resul = $this->estudiante->crearRegistro();
		return $resul;
	}

	public function eliminar($id){
		$this->estudiante->set("id",$id);
		
		$resultado = $this->estudiante->consultarRegistro();
		$num = mysqli_num_rows($resultado);
		if ($num == 0){
			return false;
			die();
		}
		$resultado = $this->estudiante->eliminarRegistro();
		return resultado;
	}

	public function ver($campo, $valor){
		$this->estudiante->set($campo,$valor);
		$resultado = $this->estudiante->verRegistro();
		return $resultado;
	}

	public function editar($id, $cedula_vieja, $cedula, $nombre, $apellido, $telefono, $edad, $promedio){
	
		$this->estudiante->set("id",$id);
		$this->estudiante->set("cedula_vieja",$cedula_vieja);
		$this->estudiante->set("cedula", $cedula);
		$this->estudiante->set("nombre", $nombre);
		$this->estudiante->set("apellido", $apellido);
		$this->estudiante->set("telefono", $telefono);
		$this->estudiante->set("edad", $edad);
		$this->estudiante->set("promedio", $promedio);

		$resultado = $this->estudiante->consultarRegistro();
		$num = mysqli_num_rows($resultado);
		if ($num == 0){
			return false;
			die();
		} 
	
		$resultado = $this->estudiante->editarRegistro();
		return resultado;
	}

	public function listar(){
		$resultado = $this->estudiante->listarRegistros();
	}

}

?>