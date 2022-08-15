<?php
session_start();
if(empty($_SESSION['user'])){
    header("location:login.php");
}
require "library/category.php";
if(isset($_POST['title'])){

     update($_POST['title'],$_POST['id']);
     header("location:index.php");
}else{
 $row = getrow($_GET['id']);
}
?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width= , initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
   <form action="update.php" method="post">
        <input type="text" name="title" value="<?= $row['title'];?>">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        <input type="submit" value="update">
    </form>
    <a href="logout.php">logout</a>
   </body>
   </html>  