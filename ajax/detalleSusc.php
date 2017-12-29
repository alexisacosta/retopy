<?php
require_once("../conn/clases.php");

	$id = $_GET['id'];
	$fecha = $_GET['fecha'];


	if ($id == 0 and $fecha == "") {
		$d = Suscripciones::suscTodos();
	}elseif ($id != 0 and $fecha != "") {
		$d = Suscripciones::suscIdFec($id, $fecha);
	}elseif ($id == 0 and $fecha != "") {
		$d = Suscripciones::suscFec($fecha);
	}elseif ($id != 0 and $fecha == "") {
		$d = Suscripciones::suscId($id);
	}
						
	for ($i=0; $i < count($d); $i++) { 
?>
	<tr>
		<td><?php echo $d[$i]['id']?></td>
		<td><?php echo utf8_encode($d[$i]['nombre'])?></td>
		<td><?php echo utf8_encode($d[$i]['apellido'])?></td>
		<td><?php echo utf8_encode($d[$i]['email'])?></td>
		<td><?php echo utf8_encode($d[$i]['telefono'])?></td>
		<td><?php echo utf8_encode($d[$i]['comentario'])?></td>
		<td><?php echo utf8_encode($d[$i]['departamento'])?></td>
		<td><?php echo utf8_encode($d[$i]['ciudad'])?></td>
		<td><?php echo utf8_encode($d[$i]['edad'])?></td>
		<td><?php echo utf8_encode($d[$i]['genero'])?></td>
		<td><?php echo utf8_encode($d[$i]['encuesta'])?></td>
		<td><?php echo utf8_encode($d[$i]['interes'])?></td>
		<td><?php echo utf8_encode($d[$i]['fecha'])?></td>
	</tr>
<?php
	}
?>