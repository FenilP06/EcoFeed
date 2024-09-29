<?php

if(isset($_POST['sub']))
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
    $sql="UPDATE `donar` SET `code`='$code',`name`='$Name',`address`='$address',`email`='$email',`phone`='$phone' WHERE `code` = '$code'";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo "<SCRIPT>
        alert('Updation done ')
        window.location.replace('donarlist.php');
         </SCRIPT>";
     
    }
    else
    {
        echo "<SCRIPT>
        alert('Error updating please try again')
        window.location.replace('donarlist.php')</script>";
    }
    mysqli_close($conn);
}



?>