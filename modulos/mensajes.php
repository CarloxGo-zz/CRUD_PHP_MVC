<?php
	if (isset($res)){
		switch ($res) {
			case 1:
				echo "<script>alert('Estudiante ingresado correctamente');
				setTimeout ('redireccionar()', 1000);
				</script>";

			break;

			case 2:
				echo "<script>
				alert('Error de datos al recibir la identificación del Alumno. No se ejecutó ninguna acción');
				setTimeout ('redireccionar()', 1000);
				</script>";
			break;

			case 3:
				echo "<script>alert('Cédula de Estudiante ha sido previamente registrada. Por favor valide su información');
				setTimeout ('redireccionar()', 1000);
				</script>";
			break;

			case 4:
				echo "<script>alert('Cédula de Estudiante no encontrada. Por favor valide su información');
				setTimeout ('redireccionar()', 1000);
				</script>";
			break;

			case 5:
				echo "<script>alert('Registro de estudiante modificado correctamente');
				setTimeout ('redireccionar()', 1000);
				</script>";
			break;

			case 6:
				echo "<script>alert('Registro de estudiante borrado correctamente');
				setTimeout ('redireccionar()', 1000);
				</script>";
			break;

			default:
				echo "
				<script>alert('Error no definido. No se ejecutó ninguna acción');
				</script>";
			break;
		}
	}