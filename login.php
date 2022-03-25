<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN PAGE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  h1 {
    text-align: center;
    font-family: Roboto;
    color: royalblue;

  }
</style>
<body style="background-color:powderblue;">
  <h1>Login And Logout Page</h1>
  <br><br>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username :</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password :</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  	<h2>	Not yet a member? <a href="register.php">Sign up</a></h2>
  	</p>
  </form>
</body>
</html>

