<?php
  
  
    $db = mysqli_connect("localhost","root","","blog");
    $sql = "SELECT  B_heading,B_title,u_date,u_time,B_image,Blog_text FROM blog_data ORDER BY id DESC LIMIT 10";
    $result = mysqli_query($db,$sql);
    //$row = mysqli_fetch_array($result);

?>



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style3.css">

<body>

<!--navbar-->
<div class="icon-bar">
  <a href="blog.php"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a>  
  <a class="active" href="All_blog.php"><i class="fa fa-eye"></i></a> 
  <a href="blog_upload.html"><i class="fa fa-user"></i></a> 
  <a href="feedback.php"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
</div>


<!--Blog Body-->

<?php
while($show=mysqli_fetch_array($result)){
  echo "<div class=row>";
    echo"<div class=column>";
      echo"<div class=card>";
            echo "<h2>".$show['B_eading']."</h2>"; 
            echo "<h5>".$show['B_title']."&nbsp;&nbsp;". $show['u_date']."&nbsp;&nbsp". $show['u_time']."</h5>";
            echo"<div class=fakeimg style=height:200px;>";
              echo "<img  src='uploads/".$show['B_image']."' width=100% height=200%>";
            echo"</div>";
          echo "<p class=p>".$show['Blog_text']."</p>";
           echo "<div class=container>";
              echo "<div class=btn-group>";
                echo "<button type=button class=btn btn-primary>Edit"."</button>";
                echo "<button type=button class=btn btn-primary dropdown-toggle data-toggle=dropdown>";
                  echo "<span class=caret></span>";
                echo "</button>";
                echo " <ul class=dropdown-menu role=menu>";
                  echo "<li><a href=blog_update.html id=h>Heading</a></li>
                        <li><a href=blog_update.html id=t>Title</a></li>
                        <li><a href=blog_update.html id=i>Image</a></li>
                        <li><a href=blog_update.html id=b_t>Blog Text</a></li>";
                  echo "</ul>";
              echo"</div>";
            echo"</div>";
      echo"</div>";
      echo"</div>";
      echo"</div>";
    echo"</div>";
  echo"</div>";
}
?>

<div align="center">
    <a href="All_blog.php" class="previous round">&#8249;</a>
    <a href="#" class="next round">&#8250;</a>
</div>

<br>

<!--footer-->
<footer class="container-fluid bg-4 text-center">
  <h3>Follow us :</h3>
  
      <a href="#"><i class="fa fa-facebook"></i></a> 
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
    
  <p>© Shivam's Blog</p>
</footer>

</body>
</html> 
