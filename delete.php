<?php
session_start();
if(empty($_SESSION['user'])){
    header("location:login.php");
}
// echo $_GET['id'];
require "library/category.php";

$row =delete($_GET['id']);

header("location:index.php");
