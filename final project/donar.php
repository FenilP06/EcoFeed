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
        
    $sql = "INSERT INTO `donar`(`code`,`Name`,`address`,`email`,`phone`) VALUES ('$code','$name','$address','$email','$phone')";
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('data inserted ')
        window.location.replace('donar.html')</script>";
    }
    else
    {
        echo "<SCRIPT>
        alert('cannot insert data please try again later')
        window.location.replace('donar.html')</script>";
    }
    mysqli_close($conn);
}

?>