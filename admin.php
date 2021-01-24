<?php $pageTitle = "Admin";?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php 

if (isset($_SESSION['userId'])) {
	echo '<main id="top">';
	
    include 'includes/control-sections/performance-control.php';

    include 'includes/control-sections/add-news.php';

    echo '</main>';			
} else {
	echo '<main id="top">';
	require 'includes/login-form.php';
	echo '</main>';
}

?>


<?php include 'includes/footer.php';?>