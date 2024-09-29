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
    $dob = $_POST['bd'];
   
    
    $sql = "INSERT INTO `volunteer`(`code`, `Name`, `address`, `email`, `phone`, `DOB`) VALUES ('$code','$name','$address','$email','$phone','$dob')";
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('data inserted ')
        window.location.replace('volunteer.html')</script>";
    }
    else
    {
       echo "<SCRIPT>
        alert('Failed to insert record')
        window.location.replace('volunteer.html')</script>"; echo "failed to insert";
    }
    mysqli_close($conn);}

?>