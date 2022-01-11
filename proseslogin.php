<?php
session_start();
include 'admin/koneksi.php';



if (ISSET ($_POST['submit'])){

    echo $username =$_POST['email'];
    echo $pass = $_POST['password'];
	$pass = md5($pass);
    $stid = oci_parse($koneksi,"SELECT count(*) as jum FROM admin WHERE username = '$username' AND password = '$pass'");
	oci_execute($stid);
	$jumlah = oci_fetch_array($stid,OCI_BOTH);
	
	echo $jumlah['JUM'] ;
    if($jumlah['JUM'] == 0){
        $status = base64_encode('status');
        $url = base64_encode('failed');
       header("location:login_aksi.php?".$status."=".$url);
    }else {
            $_SESSION['status']="Active";       
            $_SESSION['username'] =$username;
				
            header("location:admin/dashboard.php");
            
        } 
    
	}
?>