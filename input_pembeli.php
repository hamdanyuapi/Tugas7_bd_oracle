<?php 
include "../admin/koneksi.php";

$NAMA_PEMBELI = $_POST['NAMA_PEMBELI'];
$ALAMAT       = $_POST['ALAMAT'];

$sql="insert into pembeli values ('','$NAMA_PEMBELI','$ALAMAT')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:pembeli.php?pesan=input');
	}
	else {echo "gagal";}



 ?>