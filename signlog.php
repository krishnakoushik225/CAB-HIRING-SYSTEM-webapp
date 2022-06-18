<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="./js.js"></script>
</head>
<body>
    <h1 style="color: Black;">BookMyCab</h1><br>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
	
	<form action = "insertcust.php" method="post">
		<h1>Create Account</h1>
		<span>using your email for registration</span>
		<input type="text" name="name" placeholder="Name" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="number" name="phno" placeholder="Phone Number" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" id="SignUp" name="submit" value="SignUp">
	</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php", method="post">
			<h1>Sign In</h1>
		<span>to access your account</span><br><br>
		<input type="email" name="eemail" placeholder="Email">
		<input type="password" name="ppassword" placeholder="Password">
		<br>
		<input type="submit" id="SignIn" name="signin" value="SignIn">
		</form>
	</div>
	
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello passenger!</h1>
				<p>Already have an account?</p>
				<p>Fasten your seat belt and click on the sign in button below to login to your account.</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hey there!</h1>
				<p>New to the app? </p>
				<p>We've got you covered. Click on the sign up button below to register yourself and ride with us!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
	</div>
<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>