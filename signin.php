<?php
 include('signinvalidation.php')
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

      <li class="nav-item ">
        <a class="nav-link" href="./signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./signin.php">Sign in</a>
      </li>
    </ul>
  </div>
</nav>
<section class="container-fluid content">
	<h3>sign in</h3>
	<form method="POST">

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email"value ="<?php echo $email;?>" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <div class="error"><?php echo $errors['email'];?></div>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name='password' class="form-control" id="password" placeholder="Password">
    <div class="error"><?php echo $errors['password']; ?></div>
  </div>
 <input name="submit" type="submit" value="submit" class="btn btn-primary"></input>
</form>
</section>
</body>
</html>