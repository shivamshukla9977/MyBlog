<?php

	if(isset($_POST['update'])){
		$update = $_POST['update'];
		$db = mysqli_connect("118.185.43.122","0537cs161041","shivam","0537cs161041");
		$sql = "SELECT * FROM blog_data WHERE id=$update";
		$result = mysqli_query($db,$sql);

		while ($row = mysqli_fetch_array($result)) {
			echo"<div class=leftcolumn container-fluid>";
      		echo"<div class=card>";
        		//<!--Blog 1-->
            echo "<h2>".$row['heading']."</h2>"; 
            echo "<h5>".$row['title']."&nbsp;&nbsp;". $row['date']."&nbsp;&nbsp;". $row['time']."</h5>";
            echo"<div class=fakeimg style=height:200px;>";
            echo "<img src='uploads/".$row['image']."' width=100% height=150%>";
            echo"</div>";
            echo "<p class=p>".$row['blog_text']."</p>";
      		echo"</div>";
      		echo"</div>";

		}
	}

?>