<?php
session_start();
$username = $_SESSION['username'];
if(!isset($_SESSION['username']))
{
    header("location:index.html");
}
if(isset($_SESSION['username']))
{
    $conn = mysqli_connect('localhost','root','','ckb');
    date_default_timezone_set("Asia/Kolkata");
    $date = date('Y-m-d h:i:s a', time());
    $logout = "0000-00-00 00:00:00";
    $sql = "UPDATE `login` SET `logouttime`='$date' WHERE `username` = '$username' AND `logouttime` = '$logout'";
    $query = mysqli_query($conn,$sql);
    session_unset();
    session_destroy();
    header("location:index.html");
   
}
?>
