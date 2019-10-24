<?php
include "koneksi.php";

$id_hewan = $_POST['id_hewan'];
$nama_hewan = $_POST['nama_hewan'];
$jenis_hewan = $_POST['jenis_hewan'];
$stock = $_POST['stock'];
$tanggal = $_POST['tanggal'];

if ($nama_hewan == '') {
	$data['error']['edit_nama_hewan'] = 'Nama Hewan harap diisi';
}
if ($jenis_hewan == '') {
	$data['error']['edit_jenis_hewan'] = 'Pilih Jenis Hewan';
}
if ($stock == '') {
	$data['error']['edit_stock'] = 'Stock Harap Di isi';
}
if ($tanggal == '') {
	$data['error']['edit_tanggal'] = 'tanggal Harap Di isi';
}

if (empty($data['error'])) {
	$query = "UPDATE peternakan SET nama_hewan = '$nama_hewan', jenis_hewan = '$jenis_hewan', stock = '$stock', tanggal = '$tanggal' WHERE id_hewan = '$id_hewan'";
	mysqli_query($koneksi, $query) or die("Gagal Perintah SQL".mysql_error());
	$data['hasil'] = 'sukses';
} else {
	$data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

