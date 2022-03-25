<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUpL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  h4 {
    text-align: center;
    color: royalblue;
    font-size: 150%;
  }
</style>
<body style="background-color:powderblue;">
  <h4>Registration Form :</h4>
  <br><br>
  <div class="header">
  	<h2></h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<h2>Existing User? <a href="login.php">Sign in</a></h2>
  	</p>
  </form>
</body>
</html>