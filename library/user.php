<?php
$connect = mysqli_connect("localhost","root","","crudapp");
 function auth($email,$password){
    $query ="SELECT * FROM `user` WHERE `email`='$email' AND `password` ='$password'";
    $sql = mysqli_query($GLOBALS['connect'],$query);
    return mysqli_fetch_assoc($sql);

 }