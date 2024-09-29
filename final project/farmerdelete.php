<?php

$conn=mysqli_connect('localhost','root','','ckb');
$code=$_POST['D1'];
$sql="DELETE FROM `farmer` WHERE `code`='$code'";
if(mysqli_query($conn,$sql))
{
    //header("location:farmerlist.php");
    echo "<SCRIPT>
        alert('record deleted successfully')
        window.location.replace('farmerlist.php')</script>";
}
else
{
    echo "<SCRIPT>
        alert('record not deleted successfully')
        window.location.replace('farmerlist.php')</script>";
    
}mysqli_close($conn);
?>