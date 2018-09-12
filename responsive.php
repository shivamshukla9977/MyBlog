<?php
  
  
    $db = mysqli_connect("localhost","root","","blog");
    $sql = "SELECT heading,title,date,image,blog_text FROM blog_data ORDER BY id DESC limit 2";
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
<link rel="stylesheet" type="text/css" href="css/style2.css">
<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a> 
  <a href="#"><i class="fa fa-user"></i></a>  
  <a href="#"><i class="fa fa-eye"></i></a> 
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <a href="#"><i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-youtube"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
</div>


<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/blog-banner.jpg" style="width:100%">
  <img class="mySlides" src="images/blogbanner.png" style="width:100%">
  <img class="mySlides" src="images/blog-banner.jpg" style="width:100%">
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>


<!--Blog Body-->
<div class="row">
<?php
while($show=mysqli_fetch_array($result)){
    echo"<div class=leftcolumn container-fluid>";
      echo"<div class=card>";
        //<!--Blog 1-->
            echo "<h2>".$show['heading']."</h2>"; 
            echo "<h5>".$show['title']."&nbsp;&nbsp;". $show['date']."</h5>";
            echo"<div class=fakeimg style=height:200px;>";
              echo "<img src='uploads/".$show['image']."' width=100% height=150%>";
            echo"</div>";
          echo "<p class=p>".$show['blog_text']."</p>";
      echo"</div>";
      echo"</div>";
      
      //<!--Blog 2-->
      /*echo"<div class=card>";
        //<!--Blog 1-->
        echo "<h2>".$show['heading']."</h2>"; 
        echo "<h5>".$show['title']."&nbsp;&nbsp;". $row['date']."</h5>";
        echo"<div class=fakeimg style=height:200px;>";
           echo "<img src='uploads/".$show['image']."' width=100% height=150%>";
        echo"</div>";
        echo "<p class=p>".$show['blog_text']."</p>";
      echo"</div>";*/
    
}
?>

<!--div class="row">
  <div class="leftcolumn container-fluid">
    <div class="card">
      <!-Blog 1-==->
      <?php //echo "<h2>".$row['heading']."</h2>"; ?>
      <?php //echo "<h5>".$row['title']."&nbsp;&nbsp;". $row['date']."</h5>";?>
      <div class="fakeimg" style="height:200px;">
          <?php //echo "<img src='uploads/".$row['image']."' width=100% height=150%>";?>
      </div>
      <?php //echo "<p class=p>".$row['blog_text']."</p>";?>
    </div>
    <!-=-Blog 2-=->
    <div class="card">
      <?php //echo "<h2>".$row['heading']."</h2>"; ?>
      <?php //echo "<h5>".$row['title']."&nbsp;&nbsp;". $row['date']."</h5>";?>
      <div class="fakeimg" style="height:200px;">
          <?php //echo "<img src='uploads/".$row['image']."' width=100% height=150%>";?>
      </div>
      <?php //echo "<p class=p>".$row['blog_text']."</p>";?>
    </div>
  </div-->

  
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>



<!--footer-->
<footer class="container-fluid bg-4 text-center" style="text-align: center;">
  <p>My Blog</p>
</footer>

</body>
</html> 
