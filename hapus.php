<?php
include "koneksi.php";

$query = "DELETE FROM peternakan WHERE id_hewan ='$_POST[id]'";

mysqli_query($koneksi, $query) or die ("Gagal Perintah SQL".mysql_error());

?>

