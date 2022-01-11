
<?php 
include "../admin/koneksi.php";

$ID_KELAPA = $_GET['ID_KELAPA'];
$sql="DELETE FROM kelapa WHERE ID_KELAPA = '$ID_KELAPA'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: kelapa.php?pesan=hapus");
 ?>