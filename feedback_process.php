<?php
	
	session_start();
	
	if (isset($_POST['submit'])) {
		# code...
		$db = mysqli_connect("localhost","root","","Blog");
		if(!$db){
			echo "Not Connected!!!".mysqli_error();
		}

		$name = $_POST['name'];
		$email = $_POST['email'];
		$feed_text = $_POST['feed_text'];
		$feed_time = "";

		$query = "INSERT INTO feedback(name,email,feed_text,feed_date,feed_time) VALUES('$name', '$email', '$feed_text', NOW(), NOW())";

		if(mysqli_query($db,$query)){
			//echo "Feedback saved!!";
			include('feedback.php');
		} else{
			echo "Feedback Not Saved!!!".mysqli_error($db);
		}
	}
?>