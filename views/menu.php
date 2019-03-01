<table  align="center" style="border-top: solid 1px; border-bottom: solid 1px; ">
	<thead>
		<tr>
		<th>No.</th>
		<th>Nama</th>
		<TH>Harga</TH>
		<th>Jumlah pesan</th>
	</tr>
	</thead>
	<?php foreach ($value as $val) { ?>
	
	<tbody>
	<tr>
		<td><?php echo $val->id	 ?></td>
		<td><?php echo $val->nama ?></td>
		<td>Rp. <?php echo $val->harga ?>.00</td>
		<td align="center"><input name="jumlah" type="number" min="1" max="100" step="1" width="330px" /></td>
	</tr>
	<?php } ?>
	<tr>
		<td align="right" colspan="4">
			<button  type="submit"><a href="<?php echo base_url(); ?>index.php/psesan/prosespesan ">Pesan</a></button>
		</td>
	</tr>
	</tbody>
</table>


