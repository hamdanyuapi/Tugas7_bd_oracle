<?php

error_reporting(0)

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.png" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login SI Beras</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets_login/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets_login/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets_login/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets_login/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets_login/css/main.css">

</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <h1 class="text-center login-title">silahkan login</h1>
	            <div class="account-wall">
	                <img class="profile-img" src="assets_login/img/logo.png"
	                    alt="">
						<div class="text-center">
						
						<?php
							$status = base64_decode($_GET['c3RhdHVz']);
							echo $status == 'success' ? 'Pendaftaran Sukses':($status == 'failed' ? 'Username atau Password Anda Salah':'');
						?>
						<br>
						
						</div>
	                <form class="form-signin" method="post" action="proseslogin.php">
		                <input type="text" class="form-control" name="email" placeholder="Username" required autofocus>
		                <input type="password" class="form-control" name="password" placeholder="Password" required>
		                <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">
		                    Masuk</button>
		                
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>