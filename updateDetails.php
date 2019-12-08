<?php
include("includes/includedFiles.php");
?>

<div class="userDetails">

	<div class="container borderBottom">

		<h2>EMAIL</h2>
		<input type="text" class="email" name="email" placeholder="Email Address..." value="<?php echo $userLoggedIn->getEmail(); ?>">
		<span class="message"></span>
		<button class="button" onclick="updateEmail('email')">SAVE</button>

	</div>

	<div class="container">

		<h2>PASSWORD</h2>
		<input type="password" class="oldpassword" name="oldpassword" placeholder="Current password">
		<input type="password" class="newpassword1" name="newpassword1" placeholder="New password">
		<input type="password" class="newpassword2" name="newpassword2" placeholder="Confirm password">
		<span class="message"></span>
		<button class="button" onclick="updatePassword('oldpassword', 'newpassword1', 'newpassword2')">SAVE</button>
		
	</div>
	
</div>