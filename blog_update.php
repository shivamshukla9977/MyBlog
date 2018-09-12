<?php
  
  session_start();
  $db = mysqli_connect("118.185.43.122","0537cs161041","shivam","0537cs161041");
  $sql = "SELECT  heading,title,image,blog_text FROM blog_data ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/preview.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>

<div id="content">

<h1 style="text-align: center;"> Update Your Blog</h1>
<?php
 echo "<form method=POST action=update.php?pid=$pid enctype=multipart/form-data>
  	<input type=hidden name=size value=1000000>

    <div>
        <label>Heading:&nbsp;&nbsp;</label>
        <input type=text name=heading placeholder=Blog Heading value=$row[heading]>
    </div>

    <div>
      <label>Blog Title:</label>
        <input type=text name=title placeholder=Title value=$row[title]>
    </div>

  	<div id=uploadForm>
  	  <input type=file name=image id=file onchange=onFileChange() value=$row[image]>
  	</div>
        <script type=text/javascript>
           $(#file).change(function () {
            filePreview(this);
          });
        </script>
    
  	<div>
      <textarea 
      	id=text 
      	cols=40 
      	rows=4 
      	name=blog_text 
      	placeholder=Say something about this image...> 
        $row[blog_text]
      </textarea>
  	</div>
  	
  
  </form>
    <div>
      <button type=submit name=update style=float: right;>Update</button>
    </div>
</div>"
?>
</body>