<!DOCTYPE html>
<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

?>

<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="assets/js/register.js"></script>
	<title>Register to Rogue Toons</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>
	<?php
	
	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	} else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

	?>

	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">

					<h2>Login here:</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="LoginUsername">Username</label>
						<input id="LoginUsername" type="text" name="LoginUsername" placeholder="Username" value="<?php getInputValue('LoginUsername') ?>" required>
					</p>
					<p>
						<label for="LoginPassword">Password</label>
						<input id="LoginPassword" type="password" name="LoginPassword" placeholder="Your Password" required>
					</p>

					<button type="submit" name="loginButton">LOGIN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account? Signup here!</span>
					</div>
					
				</form>

				<form id="registerForm" action="register.php" method="POST">

					<h2>Create your free account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input id="username" type="text" name="username" placeholder="Username" value="<?php getInputValue('username') ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First Name</label>
						<input id="firstName" type="text" name="firstName" placeholder="First Name" value="<?php getInputValue('firstName') ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last Name</label>
						<input id="lastName" type="text" name="lastName" placeholder="Last Name" value="<?php getInputValue('lastName') ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
					</p>
					<p>
						<label for="email2">Confim Email</label>
						<input id="email2" type="email" name="email2" placeholder="Email" value="<?php getInputValue('email2') ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input id="password" type="password" name="password" placeholder="Your Password" required>
					</p>
					<p>
						<label for="confimPassword">Confirm Password</label>
						<input id="confimPassword" type="password" name="confimPassword" placeholder="Your Password" required>
					</p>

					<button type="submit" name="registerButton">Sign Up</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Login here!</span>
					</div>
					
				</form>

			</div>

			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>Listen to songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlists</li>
					<li>Follow artists to keep up to date</li>
				</ul>
				
			</div>

		</div>
	</div>
</body>
</html>