<?php

include"koneksi.php";



$nama_hewan = $_POST['nama_hewan'];
$jenis_hewan = $_POST['jenis_hewan'];
$stock = $_POST['stock'];
$tanggal = $_POST['tanggal'];

if ($nama_hewan == '') {
	$data['error']['nama_hewan'] = 'Nama tidak boleh kosong';
}
if ($jenis_hewan == '') {
	$data['error']['jenis_hewan'] = 'Pilih Jenis Hewan';
}
if ($stock == '') {
	$data['error']['stock'] = 'Stock tidak boleh kosong';
}
if ($tanggal == '') {
	$data['error']['tanggal'] = 'tanggal tidak boleh kosong';
}

if (empty($data['error'])) {
	
		$query = "insert INTO peternakan SET
										nama_hewan = '$nama_hewan',
										jenis_hewan = '$jenis_hewan',
										stock = '$stock',iiiiiiiiiiiii
										tanggal = '$tanggal'
										";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	
	$data['hasil'] = 'sukses';
	
} else {
																																																																																						
	$data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

