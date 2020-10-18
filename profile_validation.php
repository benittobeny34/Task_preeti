<?php
session_start();
if(isset($_SESSION['name'])) {
  if(time()-$_SESSION['login_time_stamp'] > 60){
    session_destroy();
    header("Location: signin.php");
  }
}
  $id = $_SESSION['id'];
  $errors = array('number1'=>'','number2'=>'');
  $success = $number1 = $number2 = '';
  if(isset($_GET['logout'])) {
    session_destroy();
    header('Location: signin.php');
  }
  if(isset($_POST['submit'])) {
    if(empty($_POST['number1'])) {
      $errors['number1'] = 'phone Number required';
    }
    else {
      if(!preg_match("/^[0-9]{10}$/",$_POST['number1'])) {
       $errors['number1'] = 'Not a valid phone Number';
      }
      else {
        $number1 = $_POST['number1'];
      }
    }
    if(empty($_POST['number2'])) {
      $errors['number2'] = 'phone Number required';
    }
    else {
      if(!preg_match("/^[0-9]{10}$/",$_POST['number2'])) {
       $errors['number2'] = 'Not a valid phone Number';
      }
      else {
        $number2 = $_POST['number2'];
      }
    }
    if(!array_filter($errors)) {
      include('connection.php');
      $sql = "UPDATE  users SET phone_no = CONCAT_WS(',',$number1,$number2) WHERE id = $id ";
      mysqli_query($conn,$sql);
      $success = "phone number updated successfully";
    }
  }
  ?>