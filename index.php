<?php

    //$db = mysqli_connect("118.185.43.122","0537cs161041","shivam","0537cs161041");
    $db = mysqli_connect('localhost','root','','Blog');
    $sql = "SELECT B_heading,B_title,u_date,u_time,B_image,Blog_text FROM blog_data ORDER BY id DESC limit 2";
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
<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/card.css">
<script src="js/preview.js"></script>

<body style="background-image: url('images/brick.jpg');">

<!--navbar-->
<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a>  
  <a href="All_blog.php"><i class="fa fa-eye"></i></a> 
  <a href="blog_upload.html"><i class="fa fa-user"></i></a> 
  <a href="feedback.php"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
</div>


<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/blog-banner.jpg" style="width:100%">
  <img class="mySlides" src="images/blogbanner.png" style="width:100%">
  <img class="mySlides" src="images/temas-blogger.jpg" style="width:100%">
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
            echo "<h2>".$show['B_heading']."</h2>"; 
            echo "<h5>".$show['B_title']."&nbsp;&nbsp;". $show['u_date']."&nbsp;&nbsp;". $show['u_time']."</h5>";
            echo"<div class=fakeimg style=height:200px;>";
            echo "<img src='uploads/".$show['B_image']."' width=100% height=150%>";
            echo"</div>";
            echo "<p class=p>".$show['Blog_text']."</p>";
            /*button*/
           echo "<div class=container>";
              echo "<div class=btn-group>";
                echo "<button type=button class=btn btn-primary data-toggle=modal data-target=#myModal>Edit"."</button>";
              echo "</div>
                  </div>";

           echo"<!-- Modal -->
           <form action='update.php' method='POST' enctype=multipart/form-data>
              <div class=modal fade id=myModal role=dialog>
                <div class=modal-dialog modal-sm>
                  <div class=modal-content>
                    <div class=modal-header>
                      <button type=button class=close data-dismiss=modal>&times;</button>
                      <h4 class=modal-title>Update Blog</h4>
                    </div>
                    <div class=modal-body>
                      <div>
                        <label>Heading:&nbsp;&nbsp;</label>
                        <input type=text name=B_heading placeholder=Blog Heading value='$show[B_heading]'>
                      </div>
                      <div>
                        <label>Heading:&nbsp;&nbsp;</label>
                        <input type=text name=B_title placeholder=Blog Heading value='$show[B_title]'>
                      </div>
                      <div>
                        <label>Blog Image:&nbsp;&nbsp;</label>
                        //<input type=text  placeholder=Blog Heading value='$show[B_image]'>
                        <div id=uploadForm>
                          <input type=file name=B_image id=file onchange=onFileChange()>
                        </div>
                          <script type=text/javascript>
                             $(#file).change(function () {
                                 filePreview(this);
                              });
                          </script>
                      </div>
                      <div>
                        <label>Blog Text:&nbsp;&nbsp;</label>
                        <div>
                           <textarea 
                              id=text 
                              cols=40 
                              rows=4 
                              name=Blog_text 
                              value='$show[Blog_text]'
                              placeholder=Say something about this image...
                              
                              > 
                            </textarea>
                        </div>
                    </div>
                    <div class=modal-footer>
                      <button type=button class=btn btn-default data-dismiss=modal>Close</button>
                      <button type=submit name=update class=btn btn-default>Update</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>";
        
      echo"</div>";
    echo"</div>";
   
  }
?>
</div>
 <!--Team-->

<div class="row">
  <h1 style="text-align: center; color: white; font-weight: bold;"><u>Meet The Team</u></h1>
    <div class="box">
      <img src="images/IMG_20171023_133046_742-1.jpg" alt="John" style="width:100%">
      <h1></h1>
      <p class="title"></p>
      <p></p>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <!--p><button>Contact</button></p-->
    </div>

    <div class="box">
      <img src="images/IMG_20171023_133046_742-1.jpg" alt="John" style="width:100%">
      <h1></h1>
      <p class="title"></p>
      <p></p>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <!--p><button>Contact</button></p-->
    </div>

    <div class="box">
      <img src="images/IMG_20171023_133046_742-1.jpg" alt="John" style="width:100%">
      <h1></h1>
      <p class="title"></p>
      <p></p>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <!--p><button>Contact</button></p-->
    </div>

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
