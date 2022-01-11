<?php 
include "../admin/koneksi.php"; 

$JENIS_KELAPA       = $_POST['JENIS_KELAPA'];
$HARGA_KELAPA       = $_POST['HARGA_KELAPA'];

$sql="INSERT INTO kelapa VALUES ('','$JENIS_KELAPA','$HARGA_KELAPA')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:kelapa.php?pesan=input');
	}
	else {echo "gagal";}



 ?>