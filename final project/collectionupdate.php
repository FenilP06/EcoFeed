<?php
$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to insert";
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
    $collect = $_POST['serial'];
    // $dcode = $_POST['dc'];
    $vcode = $_POST['vc'];
    $tcode = $_POST['tc'];
    $cloc = $_POST['lc'];
    $waste_quantity = $_POST['wq'];
    $status = $_POST['status'];
    
    //donar details fetching
    $dquery = "SELECT `name`, `address`, `phone` FROM `donar` WHERE `code`='$dcode'";
    $dresult = mysqli_query($conn,$dquery);
    if(mysqli_num_rows($dresult)>0)
    {
    while($row=mysqli_fetch_array($dresult))
    {
        
        $d2=$row['name'];
        $d3=$row['address'];
        $d4=$row['phone'];
    }
    }
    else
    {
        echo "Wrong donar code";
    }
    
    //fetching details of volunteer
    $vquery = "SELECT `code`, `Name`, `address`, `phone` FROM `volunteer` WHERE `code` = '$vcode'";
    $vresult = mysqli_query($conn,$vquery);
    if(mysqli_num_rows($vresult)>0)
    {
    while($row1=mysqli_fetch_array($vresult))
    {
        $v1=$row1['code'];
        $v2=$row1['Name'];
        $v3=$row1['address'];
        $v4=$row1['phone'];
    }
    }
    else
    {
        echo "Wrong volunteer code";
    }
    
    //fetching details of transportation
    $tquery = "SELECT `code`, `name`, `address`,`phone`, `vehical_number`, `vehical_type`, `vehical_capacity`, `DL` FROM `transportation` WHERE `code` = '$tcode'";
    $tresult = mysqli_query($conn,$tquery);
    if(mysqli_num_rows($tresult))
    {
    while($row2=mysqli_fetch_assoc($tresult))
    {
        $t1=$row2['code'];
        $t2=$row2['name'];
        $t3=$row2['address'];
        $t4=$row2['phone'];
        $t5=$row2['vehical_number'];
        $t6=$row2['vehical_type'];
        $t7=$row2['vehical_capacity'];
        $t8=$row2['DL'];
    }
    }
    else
    {
        echo "Wrong transportation code";
    }
    
    
    //fetching details of bio plant
    // $bquery = "SELECT `code`, `Name`, `address`, `phone`, `waste_price`, `slurry_price` FROM `bio_plant` WHERE `code` = '$bcode'";
    // $bresult = mysqli_query($conn,$bquery);
    // if(mysqli_num_rows($bresult))
    // {
    // while($row3=mysqli_fetch_array($bresult))
    // {
    //     $b1=$row3['code'];
    //     $b2=$row3['Name'];
    //     $b3=$row3['address'];
    //     $b4=$row3['phone'];
    //     $b5=$row3['waste_price'];
    //     $b6=$row3['slurry_price'];
    // }
    // }
    // else
    // {
    //     echo "Wrong Bio plant code";
    // }
    
    
    // $twaste_price = $b5 * $waste_quantity;
    // $tslurry_quantity = $twaste_price / $b6;
    // $tslurry_price = $twaste_price;
    
    
    $sql1 = "UPDATE `collection_edb` SET `dcode`='$dcode',`dname`='$d2',`daddress`='$d3',`dphone`='$d4',`vcode`='$vcode',`vname`='$v2',`vaddress`='$v3',`vphone`='$v4',`tcode`='$tcode',`tname`='$t2',`tphone`='$t4',`taddress`='$t3',`DL`='$t8',`vehical_number`='$t5',`vehical_type`='$t6',`vehical_capacity`='$t7',`dist_loc`='$cloc',`waste_quantity`='$waste_quantity',`status`='$status' WHERE `collectedb_srno` = '$collect'";
    $query1 = mysqli_query($conn,$sql1);
    if($query1)
    {
        echo "<SCRIPT>
        alert('record updated successfully')
        window.location.replace('collectionlist.php')</script>";
    }
}elseif ($wastecat=="InedibleFood") {
    $collect = $_POST['serial'];
    $dcode = $_POST['dc'];
    $vcode = $_POST['vc'];
    $tcode = $_POST['tc'];
    $bcode = $_POST['bc'];
    $waste_quantity = $_POST['wq'];
    $status = $_POST['status'];

    //donar details fetching
    $dquery = "SELECT `name`, `address`, `phone` FROM `donar` WHERE `code`='$dcode'";
    $dresult = mysqli_query($conn,$dquery);
    if(mysqli_num_rows($dresult)>0)
    {
    while($row=mysqli_fetch_array($dresult))
    {
        
        $d2=$row['name'];
        $d3=$row['address'];
        $d4=$row['phone'];
    }
    }
    else
    {
        echo "Wrong donar code";
    }

    //fetching details of volunteer
    $vquery = "SELECT `code`, `Name`, `address`, `phone` FROM `volunteer` WHERE `code` = '$vcode'";
    $vresult = mysqli_query($conn,$vquery);
    if(mysqli_num_rows($vresult)>0)
    {
    while($row1=mysqli_fetch_array($vresult))
    {
        $v1=$row1['code'];
        $v2=$row1['Name'];
        $v3=$row1['address'];
        $v4=$row1['phone'];
    }
    }
    else
    {
        echo "Wrong volunteer code";
    }

    //fetching details of transportation
    $tquery = "SELECT `code`, `name`, `address`,`phone`, `vehical_number`, `vehical_type`, `vehical_capacity`, `DL` FROM `transportation` WHERE `code` = '$tcode'";
    $tresult = mysqli_query($conn,$tquery);
    if(mysqli_num_rows($tresult))
    {
    while($row2=mysqli_fetch_assoc($tresult))
    {
        $t1=$row2['code'];
        $t2=$row2['name'];
        $t3=$row2['address'];
        $t4=$row2['phone'];
        $t5=$row2['vehical_number'];
        $t6=$row2['vehical_type'];
        $t7=$row2['vehical_capacity'];
        $t8=$row2['DL'];
    }
    }
    else
    {
        echo "Wrong transportation code";
    }


//fetching details of bio plant
$bquery = "SELECT `code`, `Name`, `address`, `phone`, `waste_price`, `slurry_price` FROM `bio_plant` WHERE `code` = '$bcode'";
$bresult = mysqli_query($conn,$bquery);
if(mysqli_num_rows($bresult))
{
while($row3=mysqli_fetch_array($bresult))
{
    $b1=$row3['code'];
    $b2=$row3['Name'];
    $b3=$row3['address'];
    $b4=$row3['phone'];
    $b5=$row3['waste_price'];
    $b6=$row3['slurry_price'];
}
}
else
{
    echo "Wrong Bio plant code";
}


$twaste_price = $b5 * $waste_quantity;
$tslurry_quantity = $twaste_price / $b6;
$tslurry_price = $twaste_price;






$sql = "UPDATE `collection` SET `dcode`='$dcode',`dname`='$d2',`daddress`='$d3',`dphone`='$d4',`vcode`='$vcode',`vname`='$v2',`vaddress`='$v3',`vphone`='$v4',`tcode`='$tcode',`tname`='$t2',`tphone`='$t4',`taddress`='$t3',`DL`='$t8',`vehical_number`='$t5',`vehical_type`='$t6',`vehical_capacity`='$t7',`bcode`='$bcode',`bname`='$b2',`baddress`='$b3',`bphone`='$b4',`waste_price`='$b5',`slurry_price`='$b6',`waste_quantity`='$waste_quantity',`slurry_quantity`='$tslurry_quantity',`twaste_price`='$twaste_price',`tslurry_price`='$tslurry_price',`status`='$status' WHERE `collect_srno` = '$collect'";
$query = mysqli_query($conn,$sql);
if($query)
{
    echo "<SCRIPT>
    alert('record updated successfully')
    window.location.replace('collectionlist.php')</script>";
}
}else {
    echo "errorrrrrr in collectionupdate";
}



?>