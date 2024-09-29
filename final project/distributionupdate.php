<?php

$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect the server";
}
$dsrno = $_POST['D1'];
$fcode = $_POST['D2'];
$apprq = $_POST['D5'];
$bcode = $_POST['D7'];

$fquery="SELECT `code`, `name`, `phone`, `address` FROM `farmer` WHERE`code` = '$fcode'";
    $fresult = mysqli_query($conn,$fquery);
    while($row=mysqli_fetch_assoc($fresult))
    {
        $f1=$row['code'];
        $f2=$row['name'];
        $f3=$row['phone'];
        $f4=$row['address'];
    }
    
     $bquery="SELECT `code`,`Name`,`address`,`email`,`phone`,`slurry_price` FROM bio_plant WHERE `code` = '$bcode'";
    $bresult=mysqli_query($conn,$bquery);
    while($row=mysqli_fetch_assoc($bresult))
    {
        $b1=$row['code'];
        $b2=$row['Name'];
        $b3=$row['address'];
        $b4=$row['email'];
        $b5=$row['phone'];
        $b6=$row['slurry_price'];
    }
    
    $sql = "UPDATE `distribution` SET `distribute_srno`='$dsrno',`fcode`='$f1',`fname`='$f2',`fphone`='$f3',`faddress`='$f4',`approved_quantity`='$apprq',`bcode`='$b1',`bname`='$b2',`bphone`='$b5',`bemail`='$b4',`baddress`='$b3',`slurry_price`='$b6' WHERE `distribute_srno` = '$dsrno'";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo "<SCRIPT>
        alert('record updated successfully')
        window.location.replace('distributionlist.php')</script>";
        // header("location:distributionlist.php");
    }
    mysqli_close($conn);
?>