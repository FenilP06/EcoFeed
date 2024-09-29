<?php

if(isset($_POST['submit']))
{
    $conn=mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "cannot connect to database";
    }
    $code=$_POST['D1'];
    $Name=$_POST['D2'];
    $address=$_POST['D3'];
    $email=$_POST['D4'];
    $phone=$_POST['D5'];
    $vehical_number=$_POST['D6'];
    $vehical_type=$_POST['D7'];
    $vehical_capacity=$_POST['D8'];
    $driving_lincence=$_POST['D9'];
    $sql="UPDATE `transportation` SET `code`='$code',`name`='$Name',`address`='$address',`email`='$email',`phone`='$phone',`vehical_number`='$vehical_number',`vehical_type`='$vehical_type',`vehical_capacity`='$vehical_capacity',`DL`='$driving_lincence' WHERE `code` = '$code'";
    if(mysqli_query($conn,$sql))
    {
        //echo "<script>alert('Updation done ');</script>";
        echo "<SCRIPT>
        alert('Updation done ')
        window.location.replace('transportlist.php');
    </SCRIPT>";
        //header("location:transportlist.php");
    }
    else
    {
       echo "<SCRIPT>
        alert('Error updating ')
        window.location.replace('transportlist.php')</script>";
    }
    mysqli_close($conn);
}



?>