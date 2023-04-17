<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img\logo.png" />
</head>
<body>
<header>
  <button type="button" name="homeButton" onclick="location.href='index.php';">Home Page</button>
  <button type="button" name="mainButton" onclick="location.href='Invoices.php';">Main Page</button>
</header>

<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
    <label for="file">Select image:</label> 
    <input type="file" name="file" id="file">
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
  echo "File uploaded /uploads/".$_FILES["file"]["name"];
}
?>
</body>
</html>