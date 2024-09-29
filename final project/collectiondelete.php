<?php

$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "failed to connect to server";
}

$temp = "SELECT dcode FROM `waste_request` ORDER BY wrno DESC LIMIT 1";
$result_dcode=mysqli_query($conn,$temp);
if ($result_dcode) {
    // Check if any rows were returned
    if (mysqli_num_rows($result_dcode) > 0) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result_dcode);
        
        // Get the wastecat value
        $dcode = $row['dcode'];
        
        // Print or return the wastecat value
        // echo $dcode; // This will output the value directly
    } else {
        // No rows found
        echo "No data found for the given dcode and status.";
    }
} else {
    // Query execution failed
    echo "Error executing query: " . mysqli_error($conn);
}
$wastecatquery = "select wastecat from waste_request WHERE dcode='$dcode'";
    $resultw =mysqli_query($conn,$wastecatquery);

    if ($resultw) {
        // Check if any rows were returned
        if (mysqli_num_rows($resultw) > 0) {
            // Fetch the row as an associative array
            $row = mysqli_fetch_assoc($resultw);
            
            // Get the wastecat value
            $wastecat = $row['wastecat'];
            
            // Print or return the wastecat value
            echo $wastecat; // This will output the value directly
        } else {
            // No rows found
            echo "No data found for the given dcode and status.";
        }
    } else {
        // Query execution failed
        echo "Error executing query: " . mysqli_error($conn);
    }

if ($wastecat=="EdibleFood") {
    $collect1 = $_POST['serial'];
    $sql1 = "delete  from `collection_edb` where `collectedb_srno` = $collect1";
    $query1 = mysqli_query($conn,$sql1);
    if($query1)
    {
        echo "<SCRIPT>
        alert('record deleted successfully')
        window.location.replace('collectionlist.php')</script>";
    }
mysqli_close($conn);
}elseif ($wastecat=="InedibleFood") {
    $collect = $_POST['serial'];
    $sql = "delete  from `collection` where `collect_srno` = $collect";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo "<SCRIPT>
        alert('record deleted successfully')
        window.location.replace('collectionlist.php')</script>";
    }
mysqli_close($conn);
}else{
echo "Error in collection deleted !!!";

}

?>