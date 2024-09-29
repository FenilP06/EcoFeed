<?php
$collect = $_REQUEST['collect'];
$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect to server";
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
            // echo $wastecat; // This will output the value directly
        } else {
            // No rows found
            echo "No data found for the given dcode and status.";
        }
    } else {
        // Query execution failed
        echo "Error executing query: " . mysqli_error($conn);
    }



if ($wastecat == "EdibleFood") {
  $sql = "SELECT `collectedb_srno`, `date`, `dcode`, `dname`, `vcode`, `vname`, `tcode`, `tname`, `dist_loc`, `appx_quantity`, `waste_quantity`, `status` FROM `collection_edb` WHERE `collectedb_srno` = '$collect'";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query))
{
    $c1 = $row['collectedb_srno'];
    $c2 = $row['date'];
    $c3 = $row['dcode'];
    $c4 = $row['dname'];
    $c5 = $row['vcode'];
    $c6 = $row['vname'];
    $c7 = $row['tcode'];
    $c8 = $row['tname'];
    $c9 = $row['dist_loc'];
    $c11 = $row['appx_quantity'];
    $c12 = $row['waste_quantity'];
    $c16 = $row['status'];    
}
}
elseif($wastecat == "InedibleFood"){
  $sql = "SELECT `collect_srno`, `date`, `dcode`, `dname`, `vcode`, `vname`, `tcode`, `tname`, `bcode`, `bname`, `appx_quantity`, `waste_quantity`, `slurry_quantity`, `twaste_price`, `tslurry_price`, `status` FROM `collection` WHERE `collect_srno` = '$collect'";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query))
{
    $c1 = $row['collect_srno'];
    $c2 = $row['date'];
    $c3 = $row['dcode'];
    $c4 = $row['dname'];
    $c5 = $row['vcode'];
    $c6 = $row['vname'];
    $c7 = $row['tcode'];
    $c8 = $row['tname'];
    $c9 = $row['bcode'];
    $c10 = $row['bname'];
    $c11 = $row['appx_quantity'];
    $c12 = $row['waste_quantity'];
    $c13 = $row['slurry_quantity'];
    $c14 = $row['twaste_price'];
    $c15 = $row['tslurry_price'];
    $c16 = $row['status'];    
}
}

else{
echo"error from collectionedit.php edit button";
}


?>
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collection edit</title>
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
<div class="container">
<br />
    <h2 align="center">Collection Record Update</h2>
    <br />
</div>

<?php if ($wastecat == "EdibleFood"): ?>
  <form class="form-horizontal" method="post" action='collectionupdate.php'>
        <div class="form-group">
          <label class="col-sm-5 control-label">Serial no. </label>
          <div class="col-xs-5">
            <input type="text" readonly="" class="form-control" name="serial" value="<?php echo $collect?>" required="" .col-xs-3/>
            <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label">Date </label>
          <div class="col-xs-5">
            <input type="date" readonly="" name="date" value="<?php echo $c2?>" required="" class="form-control" .col-xs-3/>
            
          </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Code of donar  </label>
            <div class="col-xs-5">
              <input type="text"  name="dc" value="<?php echo $c3; ?>" required="" class="form-control" .col-xs-3/>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of donar </label>
            <div class="col-xs-5">
              <input type="email" readonly="" name="dn" value="<?php echo $c4?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Code of volunteer </label>
            <div class="col-xs-5">
              <input type="text" name="vc" value="<?php echo $c5?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of volunteer </label>
            <div class="col-xs-5">
              <input type="text" readonly="" name="vn" value="<?php echo $c6?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Code of Transporter </label>
            <div class="col-xs-5">
              <input type="text" name="tc" value="<?php echo $c7?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of Transporter </label>
            <div class="col-xs-5">
              <input type="text" readonly="" name="tn" value="<?php echo $c8?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Location</label>
            <div class="col-xs-5">
              <input type="text" readonly="" name="lc" value="<?php echo $c9?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-5 control-label">Approx. Quantity of waste </label>
            <div class="col-xs-5">
              <input type="number" readonly="" name="apq" value="<?php echo $c11?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Waste Quantity </label>
            <div class="col-xs-5">
              <input type="number" name="wq" value="<?php echo $c12?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-5 control-label">Status </label>
            <div class="col-xs-5">
              <input type="text"  name="status" value="<?php echo $c16?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-10">
            <input type="submit" class="btn btn-primary"name="sub" value="Save Changes"/> 
          </div>
        </div>
      </form>

<?php elseif ($wastecat == "InedibleFood"): ?>
  <form class="form-horizontal" method="post" action='collectionupdate.php'>
        <div class="form-group">
          <label class="col-sm-5 control-label">Serial no. </label>
          <div class="col-xs-5">
            <input type="text" readonly="" class="form-control" name="serial" value="<?php echo $collect?>" required="" .col-xs-3/>
            <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label">Date </label>
          <div class="col-xs-5">
            <input type="date" readonly="" name="date" value="<?php echo $c2?>" required="" class="form-control" .col-xs-3/>
            
          </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Code of donar  </label>
            <div class="col-xs-5">
              <input type="text"  name="dc" value="<?php echo $c3; ?>" required="" class="form-control" .col-xs-3/>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of donar </label>
            <div class="col-xs-5">
              <input type="email" readonly="" name="dn" value="<?php echo $c4?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Code of volunteer </label>
            <div class="col-xs-5">
              <input type="text" name="vc" value="<?php echo $c5?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of volunteer </label>
            <div class="col-xs-5">
              <input type="text" readonly="" name="vn" value="<?php echo $c6?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Code of Transporter </label>
            <div class="col-xs-5">
              <input type="text" name="tc" value="<?php echo $c7?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of Transporter </label>
            <div class="col-xs-5">
              <input type="text" readonly="" name="tn" value="<?php echo $c8?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Code of Bio plant </label>
            <div class="col-xs-5">
              <input type="text" name="bc" value="<?php echo $c9?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Name of Bio plant </label>
            <div class="col-xs-5">
              <input type="text" readonly="" name="bn" value="<?php echo $c10?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Approx. Quantity of waste </label>
            <div class="col-xs-5">
              <input type="number" readonly="" name="apq" value="<?php echo $c11?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Waste Quantity </label>
            <div class="col-xs-5">
              <input type="number" name="wq" value="<?php echo $c12?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Slurry Quantity </label>
            <div class="col-xs-5">
              <input type="number" readonly="" name="sq" value="<?php echo $c13?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Total Waste Price </label>
            <div class="col-xs-5">
              <input type="number" readonly="" name="twp" value="<?php echo $c14?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Total slurry price </label>
            <div class="col-xs-5">
              <input type="number" readonly="" name="tsp" value="<?php echo $c15?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Status </label>
            <div class="col-xs-5">
              <input type="text"  name="status" value="<?php echo $c16?>" required="" class="form-control" .col-xs-3/>
            </div>
          </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-10">
            <input type="submit" class="btn btn-primary"name="sub" value="Save Changes"/> 
          </div>
        </div>
      </form>

<?php else: ?>
        <h1>Unknown category</h1>
        <h1>Waste Category: <?php echo htmlspecialchars($wastecatquery); ?></h1> 
        <p>We are unable to determine the food category at this time.</p>
<?php endif; ?>









<?php mysqli_close($conn); ?>
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