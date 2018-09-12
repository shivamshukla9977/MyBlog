<?php

    
    //$db = mysqli_connect("118.185.43.122","0537cs161041","shivam","0537cs161041");
    $db = mysqli_connect('localhost','root','','Blog');
    $sql = "SELECT name,email,feed_text,feed_date,feed_time FROM feedback ORDER BY feed_time desc";
    $result = mysqli_query($db,$sql);
    //$row = mysqli_fetch_array($result);


?>




<!DOCTYPE html>
<html>
<head>
	<title>Blog/Feedback</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/feedback.css">
  	<link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="js/preview.js"></script>
</head>
<body>

<!--navbar-->
<div class="icon-bar">
  <a href="blog.php"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a>  
  <a href="All_blog.php"><i class="fa fa-eye"></i></a> 
  <a href="blog_upload.html"><i class="fa fa-user"></i></a> 
  <a class="active" href="feedback.php"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
</div>

<div class="container img-responsive">
  <img class="img" src="images/blur.jpg" alt="Image">
  <div class="centered"><p>"Regular feedback is one of the hardest things to drive through an organization."</p>
  	<h6 style="font-size:1vw;">- Kenneth Chenault</h6>
  </div>
</div>

<div class="row">
<div class="card">
	<fieldset>
		<div class="col-sm-4 img-responsive">
			<img src="images/megaphone.png" width=100%; height="300%" ">
		</div>
		<div class="col-sm-8">
			<form action="feedback_process.php" method="POST" enctype="multipart/form-data">
				<div>
					<label>Name:</label>
					<input type="text" name="name" placeholder="Your Name">
				</div>
				<div>
					<label>E-mail Id:</label>
					<input type="text" name="email" placeholder="Your E-mail Id">
				</div>
				<div>
					<label>FeedBack:</label>
					<textarea 
      					id="text" 
      					cols="40" 
      					rows="5"  
      					placeholder="We would love to hear your thoughts, concerns or problems with anything so we can improve!"
      					name="feed_text"> 
      				</textarea>
				</div>
				<div>
					<button type="submit" class="btn btn-basic" name="submit">Submit</button>
				</div>
			</form>
		</div>
	</fieldset>
</div>
</div>

<div class="rightcolumn">
  
  
</div>

<br>

<div>
  
  <?php
     while($show=mysqli_fetch_array($result)){
      echo "
            <div class=lcard>
              <h4>@ $show[name]</h4>
              <h6>$show[email]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $show[feed_date]&nbsp;&nbsp;$show[feed_time]</h6>
              <span class=p>$show[feed_text]</span>
            </div>

      ";
    }
  ?>

</div>
<br>
<!--footer-->
<footer class="container-fluid bg-4 text-center" style="text-align: center;">
  <h3>Follow us :</h3>
  
      <a href="#"><i class="fa fa-facebook"></i></a> 
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>

  <p>© Shivam's Blog</p>
</footer>

</body>
</html>