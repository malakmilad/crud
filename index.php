<?php
session_start();
if(empty($_SESSION['user'])){
    header("location:login.php");
}
require "library/category.php";

if(isset( $_POST['keyword'])){
    $categories = search($_POST['keyword']);

}else{
    $categories =show();
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
    <form action="index.php" method="POST">
        <input type="text" name="keyword">
        <input type="submit" value="search">
    </form>
    <?php if($_SESSION['user']['role'] ==1): ?>
    <a href="add.php">add</a><br><br>
    <?php endif; ?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>title</th>
            <?php if($_SESSION['user']['role'] ==1): ?>
            <th></th>
            <th></th>
            <?php endif; ?>
        </tr>
        <?php foreach($categories as $c): ?>
        <tr>
            <td><?= $c['id']; ?></td>
            <td><?= $c['title']; ?></td>
            <?php if($_SESSION['user']['role'] ==1): ?>
            <td><a href="update.php?id=<?= $c['id']; ?>">edit</a></td>
            <td><a href="delete.php?id=<?= $c['id']; ?>">delete</a></td>
            <?php endif; ?>

        </tr>
        <?php endforeach; ?>
    </table>
    <a href="logout.php">logout</a>
</body>
</html>