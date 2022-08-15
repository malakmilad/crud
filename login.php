<?php
session_start();
require "library/user.php";
if(isset($_POST['email'])){
    $res = auth($_POST['email'],$_POST['password']);
    if(!empty($res)){
        $_SESSION['user']=$res;
        header("location:index.php");
    }else{
        echo "wrong email or password";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="email" name="email"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="login">

    </form>
</body>
</html>