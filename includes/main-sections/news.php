 
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
<section id="news">
 	<h2>Latest Dispensary News</h2>
 	<div class="news-wrapper">

 		<?php foreach(array_slice($newss, 0, 3) as $news): ?>

 			<div class="news-container">
 				<h5><?php echo htmlspecialchars(date('d-m-Y',strtotime($news['newsDate']))); ?></h5>
 				<h3><?php echo htmlspecialchars($news['newsTitle']); ?></h3>
 				<?php foreach(explode('.', $news['newsContent']) as $content): ?>
 					<p><?php echo htmlspecialchars($content); ?></p>
 				<?php endforeach ?>
 			</div>

		<?php endforeach ?>

 	</div>

 	<div>
 		<a href="news.php"><button>News archive</button></a>
 	</div>
</section>