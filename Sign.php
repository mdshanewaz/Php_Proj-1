<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SignUp</title>
	<link rel="stylesheet" href="v.css"/>
	<link rel="stylesheet" href="l.css"/>
</head>
<body>
	<ul class="v">
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="oder.php">Order Food</a></li>
			<li><a href="job.php">Find Job</a></li>
			<li><a href="#">Signup</a></li>
			<li><a href="login.php">Login</a></li>
	</ul>
	<div class="full">
	<div class="wrap">
	<h2>SginUp</h2>
	<form action="Insert.php" method="post"> 
	<div class="login">
	<input type="text" name="fname" placeholder="First Name"/>
	<input type="text" name="mname" placeholder="Middle Name"/>
	<input type="text" name="lname" placeholder="Last Name"/>
	<input type="text" name="uname" placeholder="User Name"/>
	<input type="password" name="password" placeholder="Password"/>
	<input type="email" name="email" placeholder="Enter Your Email"/>
	<input type="submit" name="submit" value="Submit" id="btn"/>
	<input type="submit" name="submit" value="Reset" id="btn"/>
	</div>
	</form>
	</div>
	</div>
	<section class="footer">
		<h4>Copyright@Newaz/mdshahnewaz1319@gmail.com</h4>
	</section>
</body>
</html>