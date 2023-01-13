<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='style.css'><link rel="stylesheet" href="./style.css">

  	<style type="text/css">
  	input[type=submit]{border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;}
	input[type=submit]:active {
		transform: scale(0.95);}
   	</style>

</head>
<body>
 <?php
 //Testing Connection
	$mysqli = new mysqli("localhost","root","root123","bchain");
	if ($mysqli -> connect_errno) {
  	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  	exit();
	}
	echo "Connected";
 //Login PHP
		if (isset($_POST['button1'])){
		//echo "Pressed";
		$name = $_POST["user"];
		$pass = $_POST["pass"];
		$sql = "SELECT Pass, Email FROM auth WHERE Email ='$name' and Pass='$pass'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			header("Location: consultation.html");
		}else{
    		echo "";
		}
	}
?>

<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="post" > <!--SignUp begins with signup.php-->
			<h1>Create Account</h1>
			<br><br>
			<input type="text" placeholder="Name" name="fname" required />
			<input type="email" placeholder="Email" name="fmail" required/>
			<input type="password" placeholder="Password" name="fpass" required/>
			<br><br>
			<input type="submit" name="button2" value="Sign up">
		</form>		<!--SignUp ends with signup.php-->
	</div>

	<div class="form-container sign-in-container">
		<form action="" method="post"> <!--SignIn begins with php written above-->
			<h1>Sign in</h1>
			<br><br>
			<input type="email" placeholder="Email" name="user" required />
			<input type="password" placeholder="Password" name="pass" required />
			<a href="g.com">Forgot your password?</a>
			<input type="submit" name="button1" value="Sign in">
		</form>  <!--SignIn ends with php written above-->
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Don't have an account?</h1>
				<p>Enter your personal details here</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
  <script  src="./script.js"></script>
</body>
</html>
