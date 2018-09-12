<?php
	
	session_start();
	
	if (isset($_POST['upload'])) {
		# code...
		$target = "uploads/".basename($_FILES['image']['name']);
		//$db = mysqli_connect("118.185.43.122","0537cs161041","shivam","0537cs161041");
		$db = mysqli_connect("localhost","root","","Blog");
		if(!$db){
			die("Not Connected".mysql_error());
		}

	# Code To Save Data.
		$heading = $_POST['heading'];
		$title = $_POST['title'];
		$image = $_FILES['image']['name'];
		$blog_text = $_POST['blog_text'];
		$u_date = '';
		$u_time = '';

		$sql = "INSERT INTO blog_data(B_heading,B_title,B_image,Blog_text,u_date,u_time) VALUES('$heading','$title','$image','$blog_text',NOW(),NOW() )";
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			//echo "<img src='images/".$_FILES['image']['name']."'height=200 width=200/>";
		}
		if (mysqli_query($db,$sql)) {
     		include('blog.php');
      	} else {
      		echo "Error: " . mysqli_error($db);
    	}
	}
?>