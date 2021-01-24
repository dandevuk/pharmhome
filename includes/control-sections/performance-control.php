<?php 

	include 'config/db-connect.php';

	if(isset($_POST['submit-performance'])){

		    ob_start();

			// create new variable

			$newStaffAppraisals = $_POST['staffAppraisals'];
			$newMandatoryTraining = $_POST['mandatoryTraining'];
			$newStaffAttendance = $_POST['staffAttendance'];
			$newPharmacyErrors = $_POST['pharmacyErrors'];

			$sql = "INSERT INTO pperform (performanceid, percentage) VALUES (1, '$newStaffAppraisals'), (2, '$newMandatoryTraining'), (3, '$newStaffAttendance'), (4, '$newPharmacyErrors')
						ON DUPLICATE KEY UPDATE percentage = VALUES(percentage)";

			// save to db and check

			if(mysqli_query($conn, $sql)){
				//success
				header('Location: index.php');
			} else {
				// error
				echo 'query error: ' . mysqli_error($conn);
			}		
			

	} // end POST check

	// close connection

	mysqli_close($conn);

	ob_end_clean();

 ?>


<section id="performance-control">
	<div class="section-container">
		<h2>Pharmacy Performance</h2>
		<form action="admin.php" method="post">
			Staff appraisals: <input type="number" name="staffAppraisals" min="60" max="100" value="<?php echo htmlspecialchars($newStaffAppraisals); ?>"><br>
			Mandatory training: <input type="number" name="mandatoryTraining" min="60" max="100" value="<?php echo htmlspecialchars($newMandatoryTraining); ?>"><br>
			Staff attendance: <input type="number" name="staffAttendance" min="70" max="100" value="<?php echo htmlspecialchars($newStaffAttendance); ?>"><br>
			Pharmacy errors: <input type="number" name="pharmacyErrors" min="0" max="10" step="0.1" value="<?php echo htmlspecialchars($newPharmacyErrors); ?>"><br>
			<button name="submit-performance">Submit</button>
		</form>
	</div>
</section>