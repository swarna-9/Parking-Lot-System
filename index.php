<?php
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 header("location: logged-index.php");
	 exit;
     }
else
{
}

   ?>
<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/gov.jpg" alt="Mountain View" style="width:954px;height:470px">
<section class="account">
  <h1>Log In</h1>
<hr>
  <form action="process-log-in.php" method="post" name="Log In">
     <input type="text" id="FullName" name="email"placeholder="Your Email" maxlength="31" required />
     <input type="password" id="FullName" name="password" placeholder="Your Password" maxlength="10" required />
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="forgotpwd.php" class="Link">Forgot Password?</a>
	 <input type="submit" id="LogIn" value="Log In">
	 </form>
	 <p><a href="signup.php" class="Link">Or Sign Up</a></p>
</section>
</section>
</body>
</html>
