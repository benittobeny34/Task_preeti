<?php 
 include('connection.php');
 $con = false;
 $sql = "SELECT * FROM users";

 $result = mysqli_query($conn,$sql);

 $allUsers = mysqli_fetch_all($result,MYSQLI_ASSOC);

 foreach($allUsers as $user) {
 	if($user['email'] == $email && $user['password'] == $password)
 	{
 		
 		session_start();
 		$_SESSION['name'] = $user['name'];
 		$_SESSION['email'] = $user['email'];
 		$_SESSION['password'] = $user['password'];
 		$_SESSION['id'] = $user['id'];

       header('Location: profile.php');
       break;
 	}
 }
 if(!$con){
 	$errors['password'] =  "Creditentials  doesn't match signup first";
 }

?>
