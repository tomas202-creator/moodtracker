<?php
$host="localhost";
$user="sqluser";
$password="password";
$db="students";

$connection= mysqli_connect($host,$user,$password);
mysqli_select_db($connection,$db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password =$_POST['password'];

    $sql="SELECT*FROM login WHERE user=? AND  Pass=?  limit 1";
    $result=mysqli_query($connect,$sql);

    if(mysqli_num_rows($result)==1){
        echo"You have succesfully logged in";
        exit();
    }
    else{
        echo"login is failed";
        exit();
    }
}
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
    <div class="container">
        <h1>LOGIN TO <span>MOODTRACKER</span></h1>
        <form method="POST" action="#">
            <div class="form-input">
                <h2>Username</h2>
                <input type="text" name="text" >
                <h2>Password</h2>
                <input type="password" name="password">
    
            </div>
            <button class="btn-login" type="submit" value="LOGIN">Login</button>
        </form>
       
    </div>
</body>
</html>