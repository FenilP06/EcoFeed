<?php

if(isset($_POST['sub']))
{
    $conn=mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "<SCRIPT>
        alert('Cannot connect to server please try again later ')
        window.location.replace('bioplant.html')</script>";
    }
    
    $code = $_POST['cd'];
    $name = $_POST['nm'];
    $address = $_POST['add'];
    $email = $_POST['em'];
    $phone = $_POST['pn'];
    $waste_price = $_POST['wp'];
    $slurry_price = $_POST['sp'];
    
    $sql = "INSERT INTO `bio_plant`(`code`, `Name`, `address`, `email`, `phone`, `waste_price`, `slurry_price`) VALUES ('$code','$name','$address','$email','$phone','$waste_price','$slurry_price')";
    if(mysqli_query($conn,$sql))
    {
        echo "<SCRIPT>
        alert('data inserted ')
        window.location.replace('bioplant.html')</script>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Failed to insert data please try again ')
        window.location.replace('bioplant.html')</script>";
    }
    mysqli_close($conn);
}

?>