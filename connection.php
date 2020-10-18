<?php 
	$conn = mysqli_connect('localhost','root','','pretti');

	if(!$conn){
		echo 'connection error'.mysqli_connect_server();
	}
	
?>