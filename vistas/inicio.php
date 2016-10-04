<?php
	$controlador = new controladorEstudiantes();
	$resultado = $controlador->index();
?>
<h3>P&aacute;gina de Inicio</h3>
	<table border="1" id="tabla">
	<thead>
			<th>Id</th>
			<th>C&eacute;dula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Promedio</th>
			<th>Acci&oacute;n</th>
	</thead>
	<tbody>
	<?php
		while($row = mysqli_fetch_array($resultado)){
		  echo '<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['cedula'].'</td>
				<td>'.$row['nombre'].'</td>
				<td>'.$row['apellido'].'</td>
				<td>'.$row['promedio'].'</td>
				<td>
				<a href="?cargar=ver&id='.$row['id'].'" ><img src="images/view.png" alt="Ver" height="20" title="Ver" ></a> 
				<a href="?cargar=mod&id='.$row['id'].'"><img src="images/upd.png" alt="Modificar" height="20" title="Modificar" ></a> 
				<a href="?cargar=del&id='.$row['id'].'"><img src="images/del.png" alt="Eliminar" height="20" title="Eliminar" ></a></td>
				</tr>';
		}
	?>
	</tbody>
	</table>
</section>