<?php
session_start();
if(!isset($_SESSION["sess_user"])){
   header("location:index.php");
} else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Moodtracker</title>
</head>
<body>
    <div class="container-box">
        <h2>Score: 1000</h2>
        <h1><?=$_SESSION["sess_user"];?>How are you feeling?</h1>
        <div class="images">
            <a href=""><img src="image3.png"></a>
            <a href=""><img src="image2.png"></a>
            <a href=""><img src="image4.png"></a>
        </div>
        <a href="index.html" class="btn-logout">LOG OUT</a>

    </div>

</body>
</html>
<?php
}
?>