
<?php

include"koneksi.php";
$no = 1;
$data = mysqli_query ($koneksi, " select 
	id_hewan,
	nama_hewan,
	jenis_hewan,
	stock,
	tanggal
	from 
	peternakan 
	where id_hewan = $_POST[id]");
$row = mysqli_fetch_array ($data);

?>
<div class="form-group">
	<input type="hidden" name="id_hewan" value="<?php echo $row['id_hewan'] ; ?>">

	<label>Nama Hewan</label>
	<div class="radio">
		<label>
			<input type="radio" name="nama_hewan" value="Ayam"  <?php if($row['nama_hewan']=='Ayam'){ ; ?> checked <?php } ?>>Ayam
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="nama_hewan" value="Bebek"  <?php if($row['nama_hewan']=='Bebek'){ ; ?> checked <?php } ?>>Bebek
		</label>
	</div>
</div>
<div class="form-group">
	<label>Jenis Hewan</label>
	<div class="radio">
		<label>
			<input type="radio" name="jenis_hewan" value="Pedaging"  <?php if($row['jenis_hewan']=='Pedaging'){ ; ?> checked <?php } ?>>Pedaging
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="jenis_hewan" value="Petelur"  <?php if($row['jenis_hewan']=='Petelur'){ ; ?> checked <?php } ?>>Petelur
		</label>
	</div>
</div>
<div class="form-group">
	<label>Tambah Stock</label>
	<input class="form-control" name="stock"  value="<?php echo $row['stock'] ; ?>">
	<p style="color:red" id="error_edit_stock"></p>
</div>
<div class="form-group">
	<label>Tanggal</label>
	<input class="form-control" name="tanggal"  value="<?php echo $row['tanggal'] ; ?>">
	<p style="color:red" id="error_edit_tanggal"></p>
</div>