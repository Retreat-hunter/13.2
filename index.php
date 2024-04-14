<?php

session_start();
if (isset($_GET['color'])) {
    $_SESSION['last_color_choosen'] = $_GET['color'];
    header('Location: ./example.php');
}



if(isset($_SESSION['last_color_choosen'])){
    $message = "The Color you last choose was ".$_SESSION['last_color_choosen'].", Did you change your mind?";
} else {
    $message = "Choose your favorite!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Color Picker</title>
    <link rel="stylesheet" href=style.css>
</head>
<body>



<div class="color-containers">
  <a href="example.php"><div class="box-1">Red</div></a>
  <a href="example.php"><div class="box-2">Green</div>
  <a href="example.php"><div class="box-3">Blue</div>
  <a href="example.php"><div class="box-4">Purple</div>
  <a href="example.php"><div class="box-5">Yellow</div>
  <a href="example.php"><div class="box-6">Orange</div>
</div>



</body>
</html>