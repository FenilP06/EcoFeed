<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Volunteer Edit</title>
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
window.onunload = function () { null };

function validate() {
    var phone = document.reg.D5.value;
    // var name = document.reg.D2.value;
    // var letters = /^[A-Za-z]+$/;
    var userinput = document.reg.D6.value;
    var dob = new Date(userinput);

    //calculate month difference from current date in time  
    var month_diff = Date.now() - dob.getTime();

    //convert the calculated difference in date format  
    var age_dt = new Date(month_diff);

    //extract year from date      
    var year = age_dt.getUTCFullYear();

    //now calculate the age of the user  
    var age = Math.abs(year - 1970);

    //display the calculated age  
    // return document.getElementById("result").innerHTML =    
    //  "Age is: " + age + " years. ";  
    if(phone.length>10 || phone.length<10)
    {
        alert("Please enter 10 digit phone number");
        document.reg.D5.focus();
        return false;
    }

    if (age < 16) {
        alert("Cannot register as volunteer because age is below 16 years");
        docuement.reg.D6.focus();
        return false;
    }
    return (true);
}
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
<div class="container"></div>
<?php
$code=$_REQUEST['code'];
$conn=mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect to database";
}
$query = "SELECT * FROM `volunteer` WHERE `code`='$code'"   ;
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
    $D1=$row['code'];
    $D2=$row['Name'];
    $D3=$row['address'];
    $D4=$row['email'];
    $D5=$row['phone'];
    $D6=$row['DOB'];
}


?>

<div class="container" align="center">
<h2>Update Volunteer Details</h2>
</div>
<br/>
    <form name="reg" onsubmit="return validate();" class="form-horizontal" method="post" action='volunteerupdate.php'>
       
        <div class="form-group">
            <label class="col-sm-5 control-label">Code </label>
            <div class="col-xs-5">
                <input type="text" readonly="" class="form-control" name="D1" value="<?php echo $D1?>" required=" " .col-xs-3 />
                <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Name </label>
            <div class="col-xs-5">
                <input type="text"  name="D2" value="<?php echo $D2 ?>" required="" class="form-control" .col-xs-3 />

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Address </label>
            <div class="col-xs-5">
                <input type="text" name="D3" value="<?php echo $D3?>" required="" class="form-control" .col-xs-3 />

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Email </label>
            <div class="col-xs-5">
                <input type="email" name="D4" value="<?php echo $D4?>" class="form-control" .col-xs-3 />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Phone </label>
            <div class="col-xs-5">
                <input type="number" name="D5" value="<?php echo $D5?>" required="" class="form-control" .col-xs-3 />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Date of birth</label>
            <div class="col-xs-5">
                <input type="date" name="D6" value="<?php echo $D6?>" required="" class="form-control" .col-xs-3 />
            </div>
        </div>
    
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <input type="submit" class="btn btn-primary" name="submit" value="Save Changes" />
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
mysqli_close($conn);
?>