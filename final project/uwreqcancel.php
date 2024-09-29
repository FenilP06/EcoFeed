<?php

if(isset($_POST['sub']))
{
    $conn = mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "failed to connect to server";
    }
    $dcode = $_POST['dc'];

    $sql1 = "UPDATE `waste_request` SET `status` = 'cancelled' WHERE `dcode` = '$dcode' AND `status` = 'pending' ";
    $query = mysqli_query($conn,$sql1);
    if($query)
    {
       echo  "<SCRIPT>
        alert('Waste request cancelled ')
        window.location.replace('uindex.php')</script>";
    }
    else
    {
        echo  "<SCRIPT>
        alert('Cannot cancel waste request')
        window.location.replace('uindex.php')</script>";
    }
}

?>