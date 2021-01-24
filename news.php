<?php $pageTitle = "News";?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php

	include 'config/db-connect.php';

	// write query for all performance figures
	$sql = "SELECT newsID, newsTitle, newsContent, newsDate FROM news ORDER BY newsDate DESC";

	// make query and get result

	$result = mysqli_query($conn, $sql);

	// fetch resulting rows as an array

	$newss = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free result from memory

	mysqli_free_result($result);

	// close connection

	mysqli_close($conn);

?>

<main id="top">

	<section class="full-width">

		<div class="news-wrapper">
	
 		<?php foreach ($newss as $news): ?>
 				
 			<div class="news-container">
 				<h5><?php echo htmlspecialchars(date('d-m-Y',strtotime($news['newsDate']))); ?></h5>
 				<h3><?php echo htmlspecialchars($news['newsTitle']); ?></h3>
 				<?php foreach(explode('.', $news['newsContent']) as $content): ?>
 					<p><?php echo htmlspecialchars($content); ?></p>
 				<?php endforeach ?>
 			</div>

 		<?php endforeach ?>

 	</div>

 	</section>

</main>

<?php include 'includes/footer.php';?>