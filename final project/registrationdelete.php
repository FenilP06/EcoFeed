<?php
if(isset($_POST['sub']))
{
$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "failed to connect to database";
}
$uname = $_POST['unm'];

$sql = "DELETE FROM `users` WHERE `username` = '$uname' ";
$query = mysqli_query($conn,$sql);
if($query)
{
    // header("location:registrationlist.php");
    echo "<SCRIPT>
    alert('Record Deleted')
    window.location.replace('registrationlist.php')</SCRIPT>";
}
else
{
    echo "<SCRIPT>
    alert('Cannot Delete Record')
    window.location.replace('registrationlist.php')</SCRIPT>";
}
}
?>