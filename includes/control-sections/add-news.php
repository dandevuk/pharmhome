<?php 

	ob_start();

    include 'config/db-connect.php';

	$newsTitle = $newsContent = '';

	$errors = array('news-title'=>'', 'news-content'=>'');

	if(isset($_POST['submit-news'])){

		// check news title
		if(empty($_POST['news-title'])){
			$errors['news-title'] = 'A title is required';
		} else{
			$newsTitle = $_POST['news-title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $newsTitle)){
				$errors['news-title'] = 'Title must be letters and spaces only';
			}
		}

		// check news content
		if(empty($_POST['news-content'])){
			$errors['news-content'] = 'Content is required';
		} else{
			$newsContent = $_POST['news-content'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $newsTitle)){
				$errors['news-content'] = 'Content must be letters and spaces only';
			}
		}

		if (array_filter($errors)){
			//echo "Errors in the form";
		} else {

			$newsTitle = mysqli_real_escape_string($conn, $_POST['news-title']);
			$newsContent = mysqli_real_escape_string($conn, $_POST['news-content']);

			// create new variable

			$sql = "INSERT INTO news(newsTitle, newsContent) VALUES ('$newsTitle', '$newsContent')";

			// save to db and check

			if(mysqli_query($conn, $sql)){
				header('Location: index.php');
			} else {
				// error
				echo 'query error: ' . mysqli_error($conn);
			}		
			
		}

	} // end POST check

	// close connection

	mysqli_close($conn);

	ob_end_clean();

?><section>
	<h2>Add news</h2>
	<div class="section-container">
		<form action="admin.php" method="post">
			<label>News title:</label><br>
			<input type="text" name="news-title" value="<?php echo htmlspecialchars($newsTitle);?>">
			<div class="error-message"><?php echo $errors['news-title'];?></div>
			<br>
			<label>News content:</label><br>
			<textarea name="news-content" cols="40" rows="10" value="<?php echo htmlspecialchars($newsContent);?>"></textarea>
			<div class="error-message"><?php echo $errors['news-content'];?></div>
			<br>

			<button name="submit-news">Submit</button>
		</form>
	</div>
</section>