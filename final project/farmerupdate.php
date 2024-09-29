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
    $phone=$_POST['D3'];
    $email=$_POST['D4'];
    $address=$_POST['D5'];
    $annual_income=$_POST['D6'];
    $total_land=$_POST['D7'];
    $sql="UPDATE `farmer` SET `code`='$code',`name`='$Name',`phone`='$phone',`email`='$email',`address`='$address',`annual_income`='$annual_income',`tland_area`='$total_land' WHERE `code` = '$code'";
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('Updation done ')
        window.location.replace('farmerlist.php');
    </SCRIPT>";
        // echo "Updation done properly";
    }
    else
    {
        echo "<SCRIPT>
        alert('Error updating please try again')
        window.location.replace('farmerlist.php')</script>";
        // echo "Error updating";
    }
    mysqli_close($conn);
}



?>