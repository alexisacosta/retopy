<?php
require_once("../conn/clases.php");

	$d = BlogArticulo::notasBlog();
					
	for ($i=0; $i < count($d); $i++) { 
	?>
	<tr>
		<td><?php echo $d[$i]['id']?></td>
		<td><?php echo utf8_encode($d[$i]['articulo'])?></td>
		<td><?php echo utf8_encode($d[$i]['categoria'])?></td>
		<td><?php echo utf8_encode($d[$i]['usuario'])?></td>
		<td><?php echo $d[$i]['fecha']?></td>
		<td><?php echo utf8_encode($d[$i]['estado_nota'])?></td>
		<td>
			<label class="switch-original">
				<?php
				if ($d[$i]['id_edo_nota']==1) {
				?>
				<input type="checkbox" checked class="checEdoArt" data-id="<?php echo $d[$i]['id']; ?>" data-edo="<?php echo $d[$i]['id_edo_nota']; ?>">
				<span class="check"></span>
				<?php
				}else{
				?>
				<input type="checkbox" class="checEdoArt" data-id="<?php echo $d[$i]['id']; ?>" data-edo="<?php echo $d[$i]['id_edo_nota']; ?>">
				<span class="check"></span>
				<?php
				}
				?>
			</label>
		</td>
	</tr>	
<?php
}
?>