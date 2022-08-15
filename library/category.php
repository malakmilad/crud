<?php
$connect = mysqli_connect("localhost","root","","crudapp");

function add($data){
    $query="INSERT INTO `category` (`title`) VALUE ('$data')";
    mysqli_query($GLOBALS['connect'],$query);
    return mysqli_affected_rows($GLOBALS['connect']);

}
function show(){
    $query="SELECT * FROM `category` ";
    $sql = mysqli_query($GLOBALS['connect'],$query);
    while($row=mysqli_fetch_assoc($sql)){
        $data[]=$row;
    };
    return $data;
}
function delete($id){
    $query="DELETE FROM `category` where `id` = $id";
    mysqli_query($GLOBALS['connect'],$query);
    return mysqli_affected_rows($GLOBALS['connect']);
}
function update($data,$id){
    $query="UPDATE `category` SET `title` = '$data' WHERE `id` = $id";
    mysqli_query($GLOBALS['connect'],$query);
    return mysqli_affected_rows($GLOBALS['connect']);
}
function getrow($id){
    $query="SELECT * FROM `category` WHERE `id` =$id ";
    $sql = mysqli_query($GLOBALS['connect'],$query);
    return mysqli_fetch_assoc($sql);
}
function search($keyword){
    $query="SELECT * FROM `category` WHERE `title` LIKE '%$keyword%'";
    $sql = mysqli_query($GLOBALS['connect'],$query);
    while($row=mysqli_fetch_assoc($sql)){
        $data[]=$row;
    };
    return $data;
}