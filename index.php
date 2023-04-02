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

    $sql="SELECT*FROM login WHERE username=? AND  password=?  limit 1"; // User and pass names of columns in login table
    $stmt=mysqli_prepare($connect,$sql); //sendig request to database
    mysqli_stmt_bind_param($stmt,"ss", $uname, $password); //binding inserted data and database data
    mysqli_stmt_execute($stmt); //execute statment
    $result = mysqli_stmt_get_result($stmt); //getting result



    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["sess_user"]=$uname; // asigns sess_user $uname
        header("location: index2.html");
        //echo"You have succesfully logged in";
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
                <input type="text" name="usernames" >
                <h2>Password</h2>
                <input type="password" name="password">
    
            </div>
            <button class="btn-login" type="submit" value="LOGIN">Login</button>
        </form>
       
    </div>
</body>
</html>