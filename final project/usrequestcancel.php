<?php

$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "cannot connect to the database";
}
$code = $_POST['code'];
$sql = "UPDATE `slurry_request` SET `status`='Cancelled' WHERE `code` = '$code' AND `status` = 'pending' ";
$query = mysqli_query($conn,$sql);
if($query)
{
   echo "<SCRIPT>
    alert('Request Cancelled')
    window.location.replace('usrequest_list.php')</SCRIPT>";
}
else
 { 
     echo  "<SCRIPT>
    alert('Cannot reject request please try again ')
    window.location.replace('uindex.php')</script>";
    // echo "cannot reject request please try again later";
}
mysqli_close($conn);
?>