<?php

$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    // echo "Failed to connect to server";
    echo "<SCRIPT>
        alert('Cannot connect to server please try again later')
        window.location.replace('distributionlist.php')</script>";
}
$dsrno = $_POST['D1'];
$sql = "delete from `distribution` where `distribute_srno` = '$dsrno' ";
$query = mysqli_query($conn,$sql);
if($query)
{
    echo "<SCRIPT>
        alert('Record deleted ')
        window.location.replace('distributionlist.php')</script>";
    // header("location:distributionlist.php");
}
mysqli_close($conn);
?>