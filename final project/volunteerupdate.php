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
    $dob=$_POST['D6'];
    $sql="UPDATE `volunteer` SET `code` = '$code',`Name` = '$Name',`address` = '$address',`email` = '$email',`phone` = '$phone',`DOB` = '$dob' WHERE `code` = '$code'";
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('Updation done ')
        window.location.replace('volunteerlist.php');
    </SCRIPT>";
        // echo "Updation done properly";
    }
    else
    {
       echo "<SCRIPT>
        alert('Error updating record ')
        window.location.replace('volunteerlist.php')</script>";
    }
    mysqli_close($conn);}



?>