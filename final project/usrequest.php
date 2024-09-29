<?php

if(isset($_POST['sub']))
{
    $conn=mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "Failed to connect server";
    }
    $fcode = $_POST['fcode'];
    $quantity = $_POST['quantity'];
    $date = date("y-m-d");
     $sql = "SELECT `Adate` FROM `distribution` WHERE `fcode` = '$fcode' ORDER BY `Adate` DESC";
     $vquery=mysqli_query($conn,$sql);
     if(!$vquery)
     {
        echo "Failed to fetch data from distribution table in sequence";
     }
     
      $fquery = "select * from `farmer` where `code` = '$fcode' ";
        $fresult = mysqli_query($conn,$fquery);
     if(mysqli_num_rows($vquery)>0)
     {
       while($row=mysqli_fetch_assoc($vquery))
        {
            $vdate=$row['Adate'];
            break;
        }
        function dateDiffInDays($date, $vdate) 
        {
            $diff = strtotime($date) - strtotime($vdate);
  
           return abs(round($diff / 86400));
        }
        $dateDiff = dateDiffInDays($date,$vdate);
        if($dateDiff > '14')
       {
        
        //$fquery = "SELECT * FROM `farmer` WHERE `code` = '$fcode' ";
        //$fresult = mysqli_query($conn,$fquery);
        while($row1=mysqli_fetch_assoc($fresult))
        {
        $f1=$row1['code'];
        $f2=$row1['name'];
        $f3=$row1['phone'];
        $f4=$row1['email'];
        $f5=$row1['address'];
        break;
        }
        $query="INSERT INTO `slurry_request`(`code`, `name`, `phone`, `email`, `address`, `quantity`, `date`, `status`) VALUES ('$f1','$f2','$f3','$f4','$f5','$quantity','$date','Pending')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
          echo  "<SCRIPT>
            alert('Slurry Request captured ')
            window.location.replace('uslurryrequest.php')</script>";
        }
        }
        elseif ($dateDiff < '14')
        {
            // echo "Insert after due date";
           echo "<SCRIPT>
        alert('Please request after due date ')
        window.location.replace('uslurryrequest.php')</script>";

        }
       }
       elseif (mysqli_num_rows($vquery)==0)
        {           if(mysqli_num_rows($fresult)>0)
            {
                while($row2=mysqli_fetch_assoc($fresult))
            {
            $f1=$row2['code'];
            $f2=$row2['name'];
            $f3=$row2['phone'];
            $f4=$row2['email'];
            $f5=$row2['address'];
            }
            $query="INSERT INTO `slurry_request`(`code`, `name`, `phone`, `email`, `address`, `quantity`, `date`, `status`) VALUES ('$f1','$f2','$f3','$f4','$f5','$quantity','$date','Pending')";
            $rresult=mysqli_query($conn,$query);
             if($rresult)
        {
        // echo "done1";
        echo "<SCRIPT>
        alert('Distribution record captured ')
        window.location.replace('uslurryrequest.php')</script>";
       } else
       {
        echo "<SCRIPT>
        alert('Failed to capture request! please try again')
        window.location.replace('uslurryrequest.php')</script>";
       }
            } 
            else
            {
              echo  "<SCRIPT>
        alert('No farmer record exist ')
        window.location.replace('uindex.php')</script>";
                // echo "no such farmer record exist";
            }
            }   
                     
        
       
       
       
       mysqli_close($conn);
       }

?>