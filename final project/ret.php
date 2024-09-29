<?php
if(isset($_POST['sub']))
{
$conn = mysqli_connect('localhost', 'root', '', 'ckb');
if (!$conn) {
    echo "Failed to connect to database";
}
session_start();
$username = $_SESSION['username'];
$pass=$_POST['pwd'];
    $repass=$_POST['repwd'];
    $password = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "UPDATE `users` SET `password`='$password' WHERE `username` = '$username'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        session_unset();
        session_destroy();
        echo "<SCRIPT>
        alert('Password Reset successfully')
        window.location.replace('index.html');</SCRIPT>";
        
    }
    else
    {
        session_unset();
        session_destroy();
        echo "<SCRIPT>
        alert('Unable to change password')
        window.location.replace('index.html');</SCRIPT>";
    }
}
?>