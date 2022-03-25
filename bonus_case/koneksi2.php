<?php
	$koneksi = mysqli_connect("localhost", "root", "", "bonus_case");
	
	if(!$koneksi){
		die("Error: Failed to connect to database!");
	}
?>