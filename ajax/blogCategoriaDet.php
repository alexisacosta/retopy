<?php
require_once("../conn/clases.php");

	$d = BlogCategoria::categoria();
					
	for ($i=0; $i < count($d); $i++) { 
?>
	<tr>
		<td><?php echo $d[$i]['id']?></td>
		<td><?php echo utf8_encode($d[$i]['categoria'])?></td>
		<td><?php echo utf8_encode($d[$i]['estado'])?></td>
		<td>
			<label class="switch-original">
				<?php
				if ($d[$i]['id_estado']==1) {
				?>
				<input type="checkbox" checked class="checEdo" data-id="<?php echo $d[$i]['id']; ?>" data-edo="<?php echo $d[$i]['id_estado']; ?>">
				<span class="check"></span>
				<?php
				}else{
				?>
				<input type="checkbox" class="checEdo" data-id="<?php echo $d[$i]['id']; ?>" data-edo="<?php echo $d[$i]['id_estado']; ?>">
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