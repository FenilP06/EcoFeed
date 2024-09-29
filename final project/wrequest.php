<?php

if(isset($_POST['sub']))
{
    $conn = mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "cannot execute mysqli_connect";
    }
    $dcode = $_POST['dcode'];
    $appx_quant = $_POST['appq'];
    $status = 'pending';
    $sql1 = "SELECT `name`, `address`, `phone` FROM `donar` WHERE `code` = '$dcode'";
    $query1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($query1))
    {
         
    
    if(!$query1)
    {
        echo "cannot fetch data";
    }
    while($row=mysqli_fetch_assoc($query1))
    {
        $name = $row['name'];
        $address = $row['address'];
        $phone = $row['phone'];
    }
    
    $sql = "INSERT INTO `waste_request`(`dcode`, `name`, `phone`, `address`, `approx_quantity`, `status`) VALUES ('$dcode','$name','$phone','$address','$appx_quant','$status')";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
       echo  "<SCRIPT>
        alert('Request inserted ')
        window.location.replace('waste_request.html')</script>";
        // header("location:waste_request.html");
    }
    else
    {
       echo "<SCRIPT>
        alert('Unable to capture request ')
        window.location.replace('waste_request.html')</script>";
        // echo "unable to run query";
    }
    mysqli_close($conn);
    }
    if(!mysqli_num_rows($query1))
    {
       echo  "<SCRIPT>
        alert('No such donar code exist')
        window.location.replace('donar.html')</script>";
        // echo "Donar detail doesn't exist";
    }
}

?>