<?php
 $name = $email = $password = $confirmPassword = "";
 $errors = array('name'=>'','email'=>'','password'=>'','confirm'=>'');
 if(isset($_POST['submit']))
 {
   if(empty($_POST['name'])){
   	 $errors['name'] = 'An name is required';
   }
   else{
   	$name = $_POST['name'];
   }
   if(empty($_POST['email'])){
   	 $errors['email'] = 'An Email is required';
   }
   else{
   	$email =  $_POST['email'];
   	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['email'] =  "Not valid Email Address";
   	}
   }
   if(empty($_POST['password'])){
   	 $errors['password'] = 'A password is required';
   }
   else{
   	$password = $_POST['password'];
   	if(!strlen($password) > 7) 
   		{
   			$errors['password'] = 'A password must contain atleast 7 characters';
   		}
   }
   if(empty($_POST['confirm'])){
   	 $errors['confirm'] = 'A password is required';
   }
   else{
   	if($_POST['password'] != $_POST['confirm']){
     $errors['confirm'] = "Password doesn't match";
   	}
   }
   if(!array_filter($errors)) {
     //login details
      include('login.php');

 }
 }
 
?>