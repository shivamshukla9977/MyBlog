
<?php
	
	session_start();
	
	if (isset($_POST['update'])) {
		# code...
		$target = "uploads/".basename($_FILES['B_image']['name']);
		$db = mysqli_connect("localhost","root","","blog");
		if(!$db){
			die("Not Connected".mysql_error());
		}


	# Code To Save Data.
		$B_heading = $_POST['B_heading'];
		$B_title = $_POST['B_title'];
		#$date = $_POST['date'];
		$u_date = "";
		$u_time = "";
		$B_image = $_FILES['B_image']['name'];
		$B_text = $_POST['Blog_text'];

		$sql = "UPDATE blog_data SET B_heading='$B_heading',B_title='$B_title',Blog_text='$B_text' WHERE B_heading='$B_heading'";
		if(move_uploaded_file($_FILES['B_image']['tmp_name'], $target)){
			//echo "<img src='images/".$_FILES['image']['name']."'height=200 width=200/>";
		}
		if (mysqli_query($db, $sql)) {
     		include('blog.php');
      	} else {
      		echo "Error: " . mysqli_error($db);
    	}
	}
?>