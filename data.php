<table class="table table-sm table-dark">
	<tr>
		<th>
			No 
		</th>
		<th>
			ID Hewan
		</th>
		<th>
			Nama Hewan 
		</th>
		<th>
			Jenis Hewan
		</th>
		<th>
			Tambah Stock
		</th>
		<th>
			Tanggal
		</th>
		<th>
			Opsi
		</th>
	</tr>
	<?php
	include "koneksi.php";
	$no = 1;
	$data = mysqli_query($koneksi, "select 
		id_hewan,
		nama_hewan,
		jenis_hewan,
		stock,
		tanggal
		from 
		peternakan 
		order by id_hewan DESC");
	while ($row = mysqli_fetch_array($data))
	{
		?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['id_hewan']; ?>
			</td>
			<td>
				<?php echo $row['nama_hewan']; ?>
			</td>
			<td>
				<?php echo $row['jenis_hewan']; ?>
			</td>
			<td>
				<?php echo $row['stock']; ?>
			</td>
			<td>
				<?php echo $row['tanggal']; ?>
			</td>
			<td>
				<a href="#" id="edit" class="btn btn-sm btn-primary" data-id="<?php echo $row['id_hewan']; ?>"><i class="fa fa-pencil"></i></a> |
				<a href="#" id="hapus" class="btn btn-sm btn-danger" data-id="<?php echo $row['id_hewan']; ?>"><i class="fa fa-trash"></i></a> 
			</td>
		</tr>
		<?php
	}
	?>
</table>