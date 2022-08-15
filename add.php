<?php
session_start();
if(empty($_SESSION['user'])){
    header("location:login.php");
}
require "library/category.php";
if(isset($_POST['title'])){
    if($_POST['title'] !=''){
        add($_POST['title']);
        header("location:index.php");
    }else{
        echo 'empty';
    };
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CATEGORY</title>
</head>
<body>
    <form action="add.php" method="POST">
        <input type="text" name="title">
        <input type="submit" value="add">
    </form>
    <a href="logout.php">logout</a>
</body>
</html>