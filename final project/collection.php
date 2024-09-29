<?php
 $conn=mysqli_connect('localhost','root','','ckb');
 
    if(!$conn)
    {
        echo "<SCRIPT>
        alert('cannot connect to database')
        window.location.replace('collection.php')</script>";
    }

    $dcode = $_REQUEST['code'];
    $wastecatquery = "select wastecat from waste_request WHERE dcode='$dcode' AND status='pending'";
    $resultw =mysqli_query($conn,$wastecatquery);

    if ($resultw) {
        // Check if any rows were returned
        if (mysqli_num_rows($resultw) > 0) {
            // Fetch the row as an associative array
            $row = mysqli_fetch_assoc($resultw);
            
            // Get the wastecat value
            $wastecat = $row['wastecat'];
            
            // Print or return the wastecat value
            // echo $wastecat; // This will output the value directly
        } else {
            // No rows found
            echo "No data found for the given dcode and status.";
        }
    } else {
        // Query execution failed
        echo "Error executing query: " . mysqli_error($conn);
    }
    
    


    $test = "select * from `waste_request` where `dcode` = '$dcode' AND `status` = 'pending'"; 
    $testquery = mysqli_query($conn,$test);

    if(mysqli_num_rows($testquery) >= 2);
    {
        $sql = "SELECT SUM(approx_quantity) FROM `waste_request` WHERE `status` = 'pending' AND `dcode` = '$dcode' GROUP BY `dcode`";
        $result1=mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($result1))
        {
            $apq = $row['SUM(approx_quantity)'];
        }
    }
    if(mysqli_num_rows($testquery) == 1)
    {
    $dsql1 = "select `approx_quantity` from `waste_request` where `dcode` = '$dcode' AND `status` = 'pending' ";
    $dquery1 = mysqli_query($conn,$dsql1);
    while($row=mysqli_fetch_assoc($dquery1))
    {
        $apq = $row['approx_quantity'];
    }
    }   
?>
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collection</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="stylesheet" href="scss/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>

    <script type="text/javasxript">

        function preventBack() 
   {
   window.history.forward();

   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };


</script>

</head>

<body id="wrapper">
    <span><marquee direction="left">Welcome To EcoFeed</marquee></span>
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="#">+91 8128662723</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#">ecofeed@gmail.com</a></li>
                    </ul>
                </div>
                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social_links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                    </ul>
                </div> -->
            </div>
        </div>

    </section>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <h2>EcoFeed</h2><span></span>
                    </a>
                    <!-- <div class="logo"> 
                            <img src="img/logo.png" alt="" >   
                           </div> -->
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="adminhome.html">Home</a></li>
                        
                                               
                               <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Masters</a>
                                <!-- <span class="caret"></span></a> -->
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users</a>
                                     <ul class="dropdown-menu  dropdown-menu-right">
                                        <!-- <li><a href="donar.html">Insert</a></li> -->
                                        <li><a href="registrationlist.php">Update</a></li>
                                        <li><a href="registrationview.php">View</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Farmer</a>
                                <!-- <span class="glyphicon glyphicon-chevron-right"></span></a>  -->
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a href="farmer.html">Insert</a></li>
                                <li><a href="farmerlist.php">Update</a></li>
                                <li><a href="farmerview.php">View</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Donar</a>
                             <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a href="donar.html">Insert</a></li>
                                <li><a href="donarlist.php">Update</a></li>
                                <li><a href="donarview.php">View</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Volunteer</a>
                                <!-- <span class="glyphicon glyphicon-chevron-right"></span></a>  -->
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a href="volunteer.html">Insert</a></li>
                                <li><a href="volunteerlist.php">Update</a></li>
                                <li><a href="volunteerview.php">View</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bio Plant</a>
                                <!-- <span class="glyphicon glyphicon-chevron-right"></span></a>  -->
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a href="bioplant.html">Insert</a></li>
                                <li><a href="bioplantlist.php">Update</a></li>
                                <li><a href="bioplantview.php">View</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Transporter</a>
                                <!-- <span class="glyphicon glyphicon-chevron-right"></span></a>  -->
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a href="transportation.html">Insert</a></li>
                                <li><a href="transportlist.php">Update</a></li>
                                <li><a href="transportview.php">View</a></li>
                            </ul>
                        </li>
                    
                    </ul></li>
                       <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Collection</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                  
                            <li class="dropdown-submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Request</a>
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a href="waste_request.html">New</a></li>
                                <li><a href="wrequestlist.php">Pending</a></li>
                                <li><a href="wrequestview.php">View all</a></li>
                            </ul>
                            </li>
                       
                        <li><a href="uqcollection.php">Update Quantity</a></li>
                        <li ><a href="collectionlist.php">Update Table</a></li>
                        <li><a href="collectionview.php">View Details</a></li>
                    </ul></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Distribution</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                              
                        <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="slurry_request.html">Requests</a>
                        <ul class="dropdown-menu  dropdown-menu-right">
                            <li><a href="slurry_request.html">New Request</a></li>
                            <li><a href="srequestlist.php">Pending</a></li>
                            <li><a href="srequestview.php">View all</a></li>
                        </ul>
                        </li>
                        <li><a href="Distributionlist.php">Update table</a></li>
                        <li><a href="slurrytotal.php">Slurry Available</a></li>
                        <li><a href="distributionview.php">Veiw all</a></li>
                    </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
                            <!-- <span class="caret"></span></a> -->
                        <ul class="dropdown-menu">
                            <li><a href="collectionview.php">Collection</a></li>
                            <li><a href="distributionview.php">Distribution</a></li>
                            <li><a href="feedbacklist.php">Feedback</a></li>
                            <li><a href="tslurrylist.php">Total Slurry</a></li>
                        </ul>
                    </li>
                
                    
                    <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

</header>
<div class="container" align="center">
<h2>Approve Collection Request</h2>
<br/>
</div>

    <form class="form-horizontal" method="post" action=''>
       
        <!-- <div class="form-group">
            <label class="col-sm-5 control-label">Serial no. of collection </label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="serial" required=" " .col-xs-3 />
                 <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> 
            </div>
        </div> -->
        <div class="form-group">
            <label class="col-sm-5 control-label">Donar code </label>
            <div class="col-xs-5">
                <input type="text" readonly="" name="dcode" value="<?php echo $dcode ?>" required="" class="form-control" .col-xs-3 />

            </div>
        </div>

        <?php if ($wastecat == "EdibleFood"): ?>
            <div class="form-group">
            <label class="col-sm-5 control-label">Volunteer code </label>
            <div class="col-xs-5">
                <input type="text" name="vcode" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-5 control-label">Transporter code </label>
            <div class="col-xs-5">
                <input type="text" name="tcode" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-5 control-label">Location </label>
            <div class="col-xs-5">
                <input type="text" name="cloc" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-5 control-label">Approx. quantity of waste </label>
            <div class="col-xs-5">
                <input type="number" readonly="" name="apxquan" value="<?php echo $apq?>" required="" class="form-control" .col-xs-3 />
            </div>
        </div>
    <?php elseif ($wastecat == "InedibleFood"): ?>
        
        <div class="form-group">
            <label class="col-sm-5 control-label">Volunteer code </label>
            <div class="col-xs-5">
                <input type="text" name="vcode" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-5 control-label">Transporter code </label>
            <div class="col-xs-5">
                <input type="text" name="tcode" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-5 control-label">Bioplant code </label>
            <div class="col-xs-5">
                <input type="text" name="bcode" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-5 control-label">Approx. quantity of waste </label>
            <div class="col-xs-5">
                <input type="number" readonly="" name="apxquan" value="<?php echo $apq?>" required="" class="form-control" .col-xs-3 />
            </div>
        </div>
    <?php else: ?>
        <h1>Unknown category</h1>
        <h1>Waste Category: <?php echo htmlspecialchars($wastecatquery); ?></h1> 
        <p>We are unable to determine the food category at this time.</p>
    <?php endif; ?>





        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <input type="submit" class="btn btn-primary" name="sub" value="Appoint" />
            </div>
        </div>
    </form>   


    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Address</h4>
                        <hr />
                        <p>Ahmedabad ,Gujarat
                        </p>

                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Useful Links</h4>
                        <hr />
                        <ul class="footer-links">
                            <li><a href="adminhome.html">Home</a></li>
                            <li><a href="alogout.php">Logout</a></li>
                           
                        </ul>

                    </div>
                </div>   
                        <div class="col-md-3 col-sm-3 col-xs-12 block">
                            <div class="footer-block">
                                <h4>Contact</h4>
                                <hr/>
                                <p>Phone: +91 8128662723 , <br>
        
                                    Mobile No: +91 8128662723<br><br>
        
                                    Email Address : ecofeed@gmail.com</p>
                            </div>
                        </div>  
        </div>
     </div>    
                  
    </section>

    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                    </div>
                    <div class="col-md-6 col-sm-6  col-xs-12 btm-footer">
                        Developed by: SanKalp 1.O
                    </div>
        </div>
    </section>
    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:rgba(56, 145, 21);" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>

</body>

</html>


<?php
if ($wastecat == "EdibleFood") {
            
        if(isset($_POST['sub']))
        {
        
            // $serial=$_POST['serial'];
            $date=date("y-m-d");
            $vcode=$_POST['vcode'];
            $tcode=$_POST['tcode'];
            $cloc=$_POST['cloc'];
            $apq=$_POST['apxquan'];
            $dcode = $_POST['dcode'];


        //fetching details of donar
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
            echo "<SCRIPT>
                alert('Donar Record not available')
                window.location.replace('donar.html')</script>";
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
            echo "<SCRIPT>
                alert('Volunteer record not available')
                window.location.replace('volunteer.html')</script>";
            //echo "Wrong volunteer code";
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
            echo "<SCRIPT>
                alert('Transporter code not available')
                window.location.replace('transportation.html')</script>";
            // echo "Wrong transportation code";
        }


        //fetching details of bio plant
        // $bquery = "SELECT `code`, `Name`, `address`, `phone`, `waste_price`, `slurry_price` FROM `bio_plant` WHERE `code` = '$bcode'";
        // $bresult = mysqli_query($conn,$bquery);
        // if(mysqli_num_rows($bresult)==1)
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
        //     echo "<SCRIPT>
        //         alert('Bioplant code not available')
        //         window.location.replace('bioplant.html')</script>";
        //     // echo "Wrong Bio plant code";
        // }
        //inserting data into collection table
        $c1="0";
        $cquery = "INSERT INTO `collection_edb`( `date`, `dcode`, `dname`, `daddress`, `dphone`, `vcode`, `vname`, `vaddress`, `vphone`, `tcode`, `tname`, `tphone`, `taddress`, `DL`, `vehical_number`, `vehical_type`, `vehical_capacity`, `dist_loc`,`appx_quantity`,  `waste_quantity`, `status`) VALUES ('$date','$dcode','$d2','$d3','$d4','$v1','$v2','$v3','$v4','$t1','$t2','$t4','$t3','$t8','$t5','$t6','$t7','$cloc','$apq','$c1','pending')";
        $cresult=mysqli_query($conn,$cquery);
        if($cresult)
        {
            $wsql = "UPDATE `waste_request` SET `status`='processed' WHERE `dcode` = '$dcode' ";
            $wquery=mysqli_query($conn,$wsql);
            echo "<SCRIPT>
            alert('Request captured')
            window.location.replace('wrequestlist.php')</script>";  
        }
        else{
            echo "<SCRIPT>
                alert('cannot capture request please try again')
                window.location.replace('wrequestlist.php')</script>";
        }
        mysqli_close($conn);
        }
}

else {
    
if(isset($_POST['sub']))
{
   
    // $serial=$_POST['serial'];
    $date=date("y-m-d");
    $vcode=$_POST['vcode'];
    $tcode=$_POST['tcode'];
    $bcode=$_POST['bcode'];
    $apq=$_POST['apxquan'];
    $dcode = $_POST['dcode'];


//fetching details of donar
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
    echo "<SCRIPT>
        alert('Donar Record not available')
        window.location.replace('donar.html')</script>";
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
    echo "<SCRIPT>
        alert('Volunteer record not available')
        window.location.replace('volunteer.html')</script>";
    //echo "Wrong volunteer code";
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
    echo "<SCRIPT>
        alert('Transporter code not available')
        window.location.replace('transportation.html')</script>";
    // echo "Wrong transportation code";
}


//fetching details of bio plant
$bquery = "SELECT `code`, `Name`, `address`, `phone`, `waste_price`, `slurry_price` FROM `bio_plant` WHERE `code` = '$bcode'";
$bresult = mysqli_query($conn,$bquery);
if(mysqli_num_rows($bresult)==1)
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
    echo "<SCRIPT>
        alert('Bioplant code not available')
        window.location.replace('bioplant.html')</script>";
    // echo "Wrong Bio plant code";
}
//inserting data into collection table
$c1="0";
$c2="0";
$c3="0";
$c4="0";
$cquery = "INSERT INTO `collection`( `date`, `dcode`, `dname`, `daddress`, `dphone`, `vcode`, `vname`, `vaddress`, `vphone`, `tcode`, `tname`, `tphone`, `taddress`, `DL`, `vehical_number`, `vehical_type`, `vehical_capacity`, `bcode`, `bname`, `baddress`, `bphone`, `appx_quantity`, `waste_price`, `slurry_price`, `waste_quantity`, `slurry_quantity`, `twaste_price`, `tslurry_price`, `status`) VALUES ('$date','$dcode','$d2','$d3','$d4','$v1','$v2','$v3','$v4','$t1','$t2','$t4','$t3','$t8','$t5','$t6','$t7','$b1','$b2','$b3','$b4','$apq','$b5','$b6','$c1','$c2','$c3','$c4','pending')";
$cresult=mysqli_query($conn,$cquery);
if($cresult)
{
    $wsql = "UPDATE `waste_request` SET `status`='processed' WHERE `dcode` = '$dcode' ";
    $wquery=mysqli_query($conn,$wsql);
    echo "<SCRIPT>
    alert('Request captured')
    window.location.replace('wrequestlist.php')</script>";  
}
else{
    echo "<SCRIPT>
        alert('cannot capture request please try again')
        window.location.replace('wrequestlist.php')</script>";
}
mysqli_close($conn);
}
}
