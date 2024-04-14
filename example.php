<?php

session_start();

if(isset($_SESSION['last_color_choosen'])){

    $last_color_choosen = $_SESSION['last_color_choosen'];
    $message = "The last color you choose was ".$last_color_choosen;
}   else {
    $message = "Pick a color and move on you oaf!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index.php"><p>Go back home to colorville!</p>
</body>
</html>