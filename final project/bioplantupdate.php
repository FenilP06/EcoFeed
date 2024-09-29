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
    $waste_price=$_POST['D6'];
    $slurry_price=$_POST['D7'];
    
    $sql="UPDATE `bio_plant` SET `code`='$code',`Name`='$Name',`address`='$address',`email`='$email',`phone`='$phone',`waste_price`='$waste_price',`slurry_price`='$slurry_price' WHERE `code` = '$code'";
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('Updation done ')
        window.location.replace('bioplantlist.php');
    </SCRIPT>";
       // echo "Updation done properly";
    }
    else
    {
        echo "<SCRIPT>
        alert('Unable to update record please try again')
        window.location.replace('bioplantlist.php')</script>";
    }
    mysqli_close($conn);
}



?>