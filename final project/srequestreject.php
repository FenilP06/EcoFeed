<?php
$code = $_POST['fc'];
$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "cannot connect to the database";
}

$sql = "UPDATE `slurry_request` SET `status`='rejected' WHERE `code` = '$code' AND `status` = 'pending' ";
$query = mysqli_query($conn,$sql);
if($query)
{
   echo "<SCRIPT>
    alert('Request rejected')
    window.location.replace('srequestlist.php')</script>";
}
else
{  echo  "<SCRIPT>
    alert('Cannot reject request please try again ')
    window.location.replace('srequestlist.php')</script>";
    // echo "cannot reject request please try again later";
}
mysqli_close($conn);
?>