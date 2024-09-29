<?php

$conn=mysqli_connect('localhost','root','','ckb');
$code=$_POST['D1'];
$sql="DELETE FROM `volunteer` WHERE `code`='$code'";
if(mysqli_query($conn,$sql))
{
   echo "<SCRIPT>
        alert('Record deleted ')
        window.location.replace('volunteerlist.php')
        </SCRIPT>";
    // header("location:volunteerlist.php");
}
else
{
    echo "<SCRIPT>
    alert('Record not deleted')
    window.location.replace('volunteerlist.php')</SCRIPT>";
    // echo "Record not deleted";
}mysqli_close($conn);
?>