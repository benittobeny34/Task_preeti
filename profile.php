<?php 
  include('profile_validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" 
	href="./bootstrap/bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <form method="GET">
         <input name="logout" type="submit" value="Log out" class="nav-link"></input>
        </form>
      </li>
    </ul>
  </div>
</nav>
<section class="container-fluid content">
	<div class="card">
  <div class="card-header">
    Profile
  </div>
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <table class="table table-dark">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th> 
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?php echo $_SESSION['name'];?></td>
          <td><?php echo $_SESSION['email'];?></td>
        </tr>
      </tbody>
    </table>
   <form method="POST">
    <p>Update Phone Number:*</p>
      <div class="form-group">
    <label for="number1">Primary Number</label>
    <input type="text" name="number1" class="form-control" id="number1" placeholder="Primary Number" title="Phone number must contain only 10 characters example 9876543210">
    <div class="error"><?php echo $errors['number1']; ?></div>
  </div>
    <div class="form-group">
    <label for="number2">Secondary Number</label>
    <input type="text" name="number2" class="form-control" id="number2" placeholder="Secondary Number" title="Phone number must contain only 10 characters example 9876543210">
    <div class="error"><?php echo $errors['number2']; ?></div>
  </div>
  <input type="submit" value="update phone no" name="submit" class="btn btn-primary">
  <div class="success"><?php echo $success;?></div>
      </form> 
  </div>
</div>
</section>
</body>
</html>