<?php 
  session_start();
  $_SESSION['user_name'] = $email;
  $_SESSION['name'] = $name;
  $_SESSION['password'] = $password;
  include('connection.php');
  $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
  if(!mysqli_query($conn,$sql)){
  	echo mysqli_error($conn);
  }
  header('Location: profile.php');
?>