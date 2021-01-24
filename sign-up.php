<?php $pageTitle = "Sign Up";?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<main>
	<section>
		<h1>Sign Up</h1>
		<?php 

			if (isset($_GET['error'])) {
				if ($_GET['error'] == "emptyfields") {
					echo '<p class="errorText">Fill in all fields</p>';
				} elseif ($_GET['error'] == "invalidmailuid") {
					echo '<p class="errorText">Invalid username and email</p>';
				} elseif ($_GET['error'] == "invalidmail") {
					echo '<p class="errorText">Invalid email</p>';
				} elseif ($_GET['error'] == "invaliduid") {
					echo '<p class="errorText">Invalid username</p>';
				} elseif ($_GET['error'] == "passwordcheck") {
					echo '<p class="errorText">Passwords do not match</p>';
				} elseif ($_GET['error'] == "usertaken") {
					echo '<p class="errorText">Username already taken.</p>';
				}
			} elseif ($_GET["signup"] == "success") {
				echo '<p>Sign up successful!</p>';
			}
		 ?>
		<form class="signUpForm" action="config/signup.inc.php" method="post">
			<input type="text" name="uid" placeholder="Username">
			<input type="text" name="mail" placeholder="Email">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat password">
			<button type="submit" name="signup-submit">Sign up!</button>
	</section>
</main>



<?php include 'includes/footer.php';?>