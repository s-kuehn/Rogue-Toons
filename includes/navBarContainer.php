<div id="navBarContainer">
				
	<nav class="navBar">
		
		<span onclick="openPage('index.php')" role="link" tabindex="0" class="logo">
			<img src="assets/images/Logo.png">
		</span>

		<div class="group">
			
			<div class="navItem">
				<span onclick='openPage("search.php")' role='link' tabindex='0' class="navItemLink">Search
					<img src="assets/images/icons/search-solid.svg" class="icon" alt="Search">
				</span>
			</div>

		</div>

		<div class="group">
			<div class="navItem">
				<span onclick="openPage('browse.php')" role="link" tabindex="0" class="navItemLink">Browse</span>
			</div>
			<div class="navItem">
				<span onclick="openPage('yourMusic.php')" role="link" tabindex="0" class="navItemLink">Your Music</span>
			</div>
			<div class="navItem">
				<span onclick="openPage('settings.php')" role="link" tabindex="0" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>
		</div>

	</nav>

</div>