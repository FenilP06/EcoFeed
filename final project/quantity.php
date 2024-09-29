<?php

$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect to server";
}


    // $collect = $_REQUEST['collect'];
    // $sql4 = "SELECT `dcode` FROM `collection_edb` WHERE `collectedb_srno` = '$collect'";
    // $sql4 = "SELECT `dcode` FROM `waste` WHERE `collectedb_srno` = '$collect'";
    // $query4= mysqli_query($conn,$sql4);
    // while($row=mysqli_fetch_assoc($query4))
    // {
    //     $dcode = $row['dcode'];
    // }

    // import dcode from waste request table 
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
                // echo $wastecat; // This will output the value directly
            } else {
                // No rows found
                echo "No data found for the given dcode and status.";
            }
        } else {
            // Query execution failed
            echo "Error executing query: " . mysqli_error($conn);
        }



$collect = $_REQUEST['collect'];
$sql4 = "SELECT`bcode` FROM `collection` WHERE `collect_srno` = '$collect'";
$query4= mysqli_query($conn,$sql4);
while($row=mysqli_fetch_assoc($query4))
{
    $bcode = $row['bcode'];
}

$sql5 = "SELECT`dist_loc` FROM `collection_edb` WHERE `collectedb_srno` = '$collect'";
$query5= mysqli_query($conn,$sql5);
while($row=mysqli_fetch_assoc($query5))
{
    $cloc = $row['dist_loc'];
}
?>
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quantity Update</title>
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

    <script>
        function preventBack() 
   {
   window.history.forward();

   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };</script>

</head>

<body id="wrapper">
    <span><marquee direction="left">Welcome To Clunky Bins</marquee></span>
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="#">+91 000 111 0101</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#">clunkybins@gmail.com</a></li>
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
                        <h2>Clunky Bins</h2><span></span>
                    </a>
                   
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
                                        <li><a href="admin_register.html">Admin Registration</a></li>
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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Requests</a>
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
                
                    
                    <li><a href="alogout.php">Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

</header>
<div class="container" align="center">
<h2>Update Slurry Quantity</h2>
<br/>
</div>


<?php if ($wastecat == "EdibleFood"): ?>
    <form class="form-horizontal" method="post" action=''>
       
        <div class="form-group">
            <label class="col-sm-5 control-label">Serial no. of collection </label>
            <div class="col-xs-5">
                <input type="text" readonly="" class="form-control" name="serial" value="<?php echo $collect; ?>" required=" " .col-xs-3 />
                <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Location </label>
            <div class="col-xs-5">
                <input type="text" readonly="" name="cloc" value="<?php echo $cloc; ?>" required="" class="form-control" .col-xs-3 />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Quantity of the waste </label>
            <div class="col-xs-5">
                <input type="number" name="wq" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <input type="submit" class="btn btn-primary" name="sub" value="Submit" />
            </div>
        </div>
    </form>   

    <?php elseif ($wastecat == "InedibleFood"): ?>
        <form class="form-horizontal" method="post" action=''>
       
        <div class="form-group">
            <label class="col-sm-5 control-label">Serial no. of collection </label>
            <div class="col-xs-5">
                <input type="text" readonly="" class="form-control" name="serial" value="<?php echo $collect; ?>" required=" " .col-xs-3 />
                <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Bio plant code </label>
            <div class="col-xs-5">
                <input type="text" readonly="" name="code" value="<?php echo $bcode; ?>" required="" class="form-control" .col-xs-3 />

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Quantity of the waste </label>
            <div class="col-xs-5">
                <input type="number" name="wq" required="" class="form-control" .col-xs-3 />
            </div>
            </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <input type="submit" class="btn btn-primary" name="sub" value="Submit" />
            </div>
        </div>
    </form> 
    <?php else: ?>
        <h1>Unknown category</h1>
        <h1>Waste Category: <?php echo htmlspecialchars($wastecatquery); ?></h1> 
        <p>We are unable to determine the food category at this time.</p>
    <?php endif; ?> 


    
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
                                <p>Phone: +91 000 111 0101 , <br>
        
                                    Mobile No: +91 8128662723<br><br>
        
                                    Email Address : clunkybins@gmail.com</p>
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
        $waste_quantity=$_POST['wq'];
        $serial=$_POST['serial'];

        // $query = "SELECT  `waste_price`, `slurry_price` FROM `bio_plant` WHERE `code`='$code' ";
        //     $sql = mysqli_query($conn,$query); 
        // if(!$sql)
        // {
        //     echo "failed to fetch";
        // }
        // while($row=mysqli_fetch_assoc($sql))
        // {
        //     $waste_price =$row['waste_price'];
        //     $slurry_price = $row['slurry_price'];
        // }
        
        
            // $twaste_price = $waste_price * $waste_quantity;
            // $tslurry_quantity = $twaste_price / $slurry_price;
            // $tslurry_price = $twaste_price;

            $query2 ="UPDATE `collection_edb` SET `waste_quantity`='$waste_quantity' WHERE `collectedb_srno` = '$serial' AND `status`='pending'";
            $sql2=mysqli_query($conn,$query2);
            if($sql2)
            {
                echo "<SCRIPT>
                alert('Quantity updated')
                window.location.replace('uqcollection.php')</script>"; 
                
            }
            else
            {
                echo "<SCRIPT>
                alert('Failed to update quantity')
                window.location.replace('uqcollection.php')</script>";
            }
            mysqli_close($conn);
        }
    }elseif($wastecat == "InedibleFood"){
        
        if(isset($_POST['sub']))
        {
            $code = $_POST['code'];
        $waste_quantity=$_POST['wq'];
        $serial=$_POST['serial'];

            
        $query = "SELECT  `waste_price`, `slurry_price` FROM `bio_plant` WHERE `code`='$code' ";
            $sql = mysqli_query($conn,$query); 
        if(!$sql)
        {
            echo "failed to fetch";
        }
        while($row=mysqli_fetch_assoc($sql))
        {
            $waste_price =$row['waste_price'];
            $slurry_price = $row['slurry_price'];
        }
        
        
            $twaste_price = $waste_price * $waste_quantity;
            $tslurry_quantity = $twaste_price / $slurry_price;
            $tslurry_price = $twaste_price;
            $query1 ="UPDATE `collection` SET `waste_quantity`='$waste_quantity',`slurry_quantity`='$tslurry_quantity',`twaste_price`='$twaste_price',`tslurry_price`='$tslurry_price' WHERE `collect_srno` = '$serial' AND `status`='pending'";
            $sql1=mysqli_query($conn,$query1);
            if($sql1)
            {
                echo "<SCRIPT>
                alert('Quantity updated')
                window.location.replace('uqcollection.php')</script>"; 
                
            }
            else
            {
                
                echo "<SCRIPT>
                alert('Failed to update quantity')
                window.location.replace('uqcollection.php')</script>";
            }
            mysqli_close($conn);
        }
}


else{
    echo"error from qunatity.php submit button";
}

?>