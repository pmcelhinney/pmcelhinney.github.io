<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <div class="box">
  <title>RUN RUN RUN</title>
  <link rel="stylesheet" type="text/css" href="login_stylesheet.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon1.png">
</head>
<body>
  
  <br>
  <div class="RunTitle">
  <h1>RUN RUN RUN </h1>
</div>
  <div class="header">
  	<h2>Sign Up</h2>
  </div>
	
  <form method="post" action="MainPage.html">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </div>
  </form>
</body>
</html>