<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Slurry Request List</title>
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

    <?php
        session_start();
        if(!isset($_SESSION['username']))
{        {
            echo "<SCRIPT>
        alert('Unable to start session')
        window.location.replace('index.html')</SCRIPT>";
        }
    }
        if($_SESSION['usercat'] == "Donar")
        {?>
           <style>
             .disabled {
                cursor: not-allowed;
                
                }
            </style> 
          
            <script>
            $(document).ready(function() {
   $(".nav a.disabled ").click(function() {
     return false;
   });
});</script>
        <?php
        }
        
        if($_SESSION['usercat'] == "Farmer")
        {?>
                        <script>
            $(document).ready(function() {
   $(".nav a.disabled1 ").click(function() {
     return false;
   });
});</script>
<style>
             .disabled1 {
                cursor: not-allowed;
                
                }
            </style>
        <?php
        }     if($_SESSION['usercat'] == "Transporter" || $_SESSION['username'] == "Volunteer")
        {?>
                        <script>
            $(document).ready(function() {
   $(".nav a.disabled2 ").click(function() {
     return false;
   });
});</script>
<style>
             .disabled2 {
                cursor: not-allowed;
                
                }
            </style>
       <?php }
        if($_SESSION['usercat'] == "Bio-Plant")
        {?>
                        <script>
            $(document).ready(function() {
   $(".nav a.disabled3 ").click(function() {
     return false;
   });
});</script>
<style>
             .disabled3 {
                cursor: not-allowed;
                
                }
            </style>
       <?php }
       
       ?>
        
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
                        <li><a href="uindex.php">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>
                       <li class="dropdown">
                            <a class="dropdown-toggle disabled1" data-toggle="dropdown" href="#">Collection</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                  
                            <li class="dropdown-submenu">
                            <a class="dropdown-toggle disabled1 disabled2 disabled3" data-toggle="dropdown" href="#">Request</a>
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <li><a class="disabled1 disabled2 disabled3" href="uwaste_request.php">New Request</a></li>
                                <li><a  class="disabled1 disabled2 disabled3" href="uwrequest_list.php">Pending</a></li>
                                <li><a  class="disabled1 disabled2 disabled3" href="uwrequest_view.php">View</a></li>
                            </ul>
                            </li>
                       
                        
                        <li><a class="disabled1" href="ucollection_view.php">View</a></li>
                    </ul></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle disabled2 " data-toggle="dropdown" href="#">Distribution</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                              
                        <li class="dropdown-submenu">
                        <a class="dropdown-toggle disabled disabled2 disabled3" data-toggle="dropdown" href="#">Requests</a>
                        <ul class="dropdown-menu  dropdown-menu-right">
                            <li><a  class="disabled disabled2 disabled3" href="uslurryrequest.php">New Request</a></li>
                            <li><a  class="disabled disabled2 disabled3" href="usrequest_list.php">Pending</a></li>
                            <li><a  class="disabled disabled2 disabled3" href="usrequest_view.php">View </a></li>
                        </ul>
                        </li>
                        <li><a class=" disabled disabled1 disabled2" href="uslurry_list.php">Slurry Available</a></li>
                        <li><a class="disabled disabled2" href="udistribution_view.php">View</a></li>
                    </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
                            <!-- <span class="caret"></span></a> -->
                        <ul class="dropdown-menu">
                            <li><a class="disabled1" href="ucollection_view.php">Collection</a></li>
                            <li><a class="disabled disabled2" href="udistribution_view.php">Distribution</a></li>
                            
                            <li><a class="disabled disabled1 disabled2" href="uslurry_list.php">Total Slurry</a></li>
                        </ul>
                    </li>
                
                    
                    <li><a href="ulogout.php">Logout</a></li>
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
    <br />
</div>

    <div class="container" align="center">
        <h2>Slurry Request list</h2>
        </div>
        <br/>
<form class="form-horizontal" method="post" action='usrequestlist.php'>
			<div class="form-group">
			  <label class="col-sm-5 control-label">Farmer Code </label>
			  <div class="col-xs-5">
				<input type="text" class="form-control" name="fc" required="" />
              </div>
			</div>
            <div class="form-group">
			  <div class="col-sm-offset-5 col-sm-10">
				<input type="submit" class="btn btn-primary"name="submit" value="Submit"/> 
			  </div>
			</div>
		  </form>
<!-- <table>
    <form action='usrequestlist.php' method="post">
        <tr>
            <td>Donar code </td>
            <td><input type="text" name="fc" required="" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </form>
</table> -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 block">
                <div class="footer-block">
                    <h4>Address</h4>
                    <hr />
                    <p>Ahmedabad , Gujarat
                    </p>
                    <!-- <a href="#" class="learnmore">Learn More <i class="fa fa-caret-right"></i></a> -->
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 block">
                <div class="footer-block">
                    <h4>Useful Links</h4>
                    <hr />
                    <ul class="footer-links">
                        <li><a href="uindex.html">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="ulogout.php">Logout</a></li>
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
            <!-- <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                Developed by <a href="#">Aspire Software Solutions</a> designed by <a href="#">Designing Team</a>
            </div> -->
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