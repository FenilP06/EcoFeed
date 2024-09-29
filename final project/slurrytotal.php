<?php

//$conn=mysqli_connect('localhost','root','','ckb');

//$sql = "SELECT SUM(column_name)
//FROM table_name
//WHERE condition";



$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect";
}

$sql = "SELECT `bcode`,`slurry_quantity`, SUM(slurry_quantity) FROM `collection` WHERE `status` = 'pending' GROUP BY `bcode`";
$result1=mysqli_query($conn,$sql);
if(mysqli_num_rows($result1) > 0)
{
while($row = mysqli_fetch_assoc($result1))

{
    $b=$row['bcode'];
    $b2 = $row['slurry_quantity'];
    $b3 = $row['SUM(slurry_quantity)'];
    $tsql = "select * from `total_slurry` where `bcode` = '$b'";
    $tquery = mysqli_query($conn,$tsql);
    if(mysqli_num_rows($tquery)>0)
    {
      $sql2="UPDATE `total_slurry` SET `slurry_quantity` = `slurry_quantity` + '$b3'  WHERE `bcode` = '$b'";
            if(mysqli_query($conn,$sql2))
            {
                $sql3 = "UPDATE `collection` SET `status` = 'processed' WHERE `bcode` = '$b'";
                if(mysqli_query($conn,$sql3))
                {
                     header("location:tslurrylist.php");
                }
                else
                {
                    echo  "<SCRIPT>
                    alert('Cannot update status of the collection ')
                    window.location.replace('tslurrylist.php')</script>";
                }
                
            }
            else
            {
                echo  "<SCRIPT>
                alert('Cannot update the slurry quantity ')
                window.location.replace('tsurrylist.php')</script>";
            }
    }
    elseif (mysqli_num_rows($tquery) == 0)
    {
        $sql1 = "INSERT INTO `total_slurry`(`bcode`,`slurry_quantity`) VALUES ('$b','$b3')";
    if(mysqli_query($conn,$sql1))
    {
        $sql2 = "UPDATE `collection` SET `status` = 'processed' WHERE `bcode` = '$b'";
        if(mysqli_query($conn,$sql2))
         {
          header("location:tslurrylist.php");
         }
         else
                {
                    echo  "<SCRIPT>
                    alert('Cannot update status of the collection ')
                    window.location.replace('tslurrylist.php')</script>";
                }
                
         
    }
    else
                {
                    echo  "<SCRIPT>
                    alert('Cannot Insert quantity into total slurry table ')
                    window.location.replace('tslurrylist.php')</script>";
                }
                
    }
    else
    {
        echo "<script>
        alert('cannot run the row check file ')
        window.location.replace('tslurrylist.php)</script>";
    }
    
}
}
elseif(mysqli_num_rows($result1) == 0)
{
   header("location:tslurrylist.php");
}

?>