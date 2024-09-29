<?php

if(isset($_POST['sub']))
{
    $conn=mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "Failed to connect to database";
    }
    
    $code = $_POST['cd'];
    $name = $_POST['nm'];
    $address = $_POST['add'];
    $email = $_POST['em'];
    $phone = $_POST['pn'];
    $vehical_number = $_POST['vn'];
    $vehical_type = $_POST['vt'];
    $vehical_capacity = $_POST['vc'];
    $drivinglincence=$_POST['dl'];
    $sql = "INSERT INTO `transportation`(`code`, `name`, `address`, `email`, `phone`, `vehical_number`, `vehical_type`, `vehical_capacity`, `DL`) VALUES ('$code','$name','$address','$email','$phone','$vehical_number','$vehical_type','$vehical_capacity','$drivinglincence')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('data inserted ')
        window.location.replace('transportation.html')</script>";
    }
    else
    {
       echo "<SCRIPT>
        alert('Failed to insert the record ')
        window.location.replace('transportation.html')</script>";
        // echo "failed to insert";
    }
    mysqli_close($conn);
}

?>