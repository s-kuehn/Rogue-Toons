<?php
if (isset($_POST['loginButton'])) {
	//Login Button was Pressed
	$username = $_POST['LoginUsername'];
	$password = $_POST['LoginPassword'];

	$result = $account->login($username, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}

}
?>