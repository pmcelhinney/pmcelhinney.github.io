<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>RUN RUN RUN</title>
  <link rel="stylesheet" type="text/css" href="login_stylesheet.css">
</head>
<body>
    <div class="box1">
  <br>
   <div class="RunTitle">
  <h1>RUN RUN RUN </h1>
</div>
  <div class="header">
  	<h2>Log In</h2>
  </div>
	 
  <form method="post" action="MainPage.html">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Log In</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>