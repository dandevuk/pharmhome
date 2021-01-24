<?php 

	session_start();

	include 'config/db-connect.php';

 ?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle; ?> | NNUH Pharmacy | pharmHome</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a407035b38.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

	<header>
		<div class="header">
			<div class="headerLogo">
				<a href="index.php"><img src="img/pharmHome-logo.png" alt="logo" /></a>
			</div>
			<div class="important-notice">
				<div class="important-notice-info">
						<span>IMPORTANT NOTICE</span> All information used is purley for display purposes and does not reflect any real data
				</div>
			</div>
			<div class="headerLogin">
				<a href="admin.php"><button>Admin</button></a>
				<?php 

					if (isset($_SESSION['userId'])) {
						echo '<form action="config/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Log Out</button>
				</form>';
					} else {
						echo '';
					}

				?>
				<button><i class="fa fa-plus-square"></i></button>
				<button><i class="fa fa-question-circle"></i></button>
				<button><i class="fa fa-bolt"></i></button>
			</div>
		</div>
	</header>

