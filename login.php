<?php 
  
 
  include('connection.php');
  $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

  if(!mysqli_query($conn,$sql)){
  	echo mysqli_error($conn);
  }
  $sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($conn,$sql);
   $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
  session_start();
  foreach($users as $user) {
    $_SESSION['login_time_stamp'] = time();
   $_SESSION['email'] = $user['email'];
  
  $_SESSION['name'] = $user['name'];
  $_SESSION['id'] = $user['id'];
}
  header('Location: profile.php');
?>