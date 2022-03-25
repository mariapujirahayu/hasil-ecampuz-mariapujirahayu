<?php
	require_once 'koneksi2.php';
	session_start();
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['id_user']=$fetch['id_user'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='referensi.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='index.php'</script>";
		}
		
	}

?>