<?php

$conn=mysqli_connect('localhost','root','','ckb');
$code=$_POST['D1'];
$sql="DELETE FROM `transportation` WHERE `code`='$code'";
if(mysqli_query($conn,$sql))
{
    // header("location:transportlist.php");
  echo  "<SCRIPT>
        alert('Record deleted  ')
        window.location.replace('transportlist.php')</script>";
}
else
{
    echo "<SCRIPT>
        alert('Record not deleted ')
        window.location.replace('transportlist.php')</script>";
    // echo "Record not deleted";
}
mysqli_close($conn);
?>