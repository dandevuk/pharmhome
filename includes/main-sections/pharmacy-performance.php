<?php

	// write query for all performance figures
	$sql = "SELECT pPerformType, percentage FROM pperform";

	// make query and get result

	$result = mysqli_query($conn, $sql);

	// fetch resulting rows as an array

	$performances = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free result from memory

	mysqli_free_result($result);

	// close connection

	mysqli_close($conn);



?>

<section id="pharmacy-performance">

	<h2>Pharmacy Performance</h2>

	<div class="performance-charts-wrapper">


		<?php foreach ($performances as $performance): ?>

			<div class="performance-charts-container">
 			<div class="performance-chart <?php colourRing(); ?>">
 				<?php echo htmlspecialchars($performance['percentage']); ?>%
 			</div>
 			<div class="performance-chart-title">
 				<?php echo htmlspecialchars($performance['pPerformType']); ?>
 			</div>
 		</div>

		<?php endforeach; ?>



		<?php 

			// change ring colour

			function colourRing() {
				global $performance;
				if ($performance['percentage']>=90) {
					echo "green-ring";
				} elseif ($performance['percentage']<90 && $performance['percentage']>=80){
					echo "amber-ring";
				} else {
					echo "red-ring";
				}
			}

		 ?>

 	</div>

</section>