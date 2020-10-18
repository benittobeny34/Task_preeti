<?php 
$email = $password = "";
 $errors = array('email'=>'','password'=>'','user_exist'=>'');
 if(isset($_POST['submit']))
 {
   if(empty($_POST['password'])){
   	 $errors['password'] = "Password field is required";
       
   }
   else{
   	$password = $_POST['password'];
   }
   if(empty($_POST['email'])){
   	 $errors['email'] = "Email field is required";
   }
   else{
   	$email =  $_POST['email'];
   	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['email'] =  "Not valid Email Address";
   	}
      if(!array_filter($errors)){
         include('check_user_exist.php');
      }
   }
}

?>