
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page</title>
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
        {
            echo "<SCRIPT>
        alert('Unable to start session')
        window.location.replace('index.html')</script>";
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
        }     if($_SESSION['usercat'] == "Transporter" || $_SESSION['usercat'] == "Volunteer")
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


</header>
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/reduce.jpeg');"></div>
            <div class="carousel-caption slide-up">
                <h1 class="banner_heading">Closing The<span> Food Waste </span>Gap</h1>
                <p class="banner_txt">Don't waste food beacuse so many needy hands are waiting for it. Cutting food waste is a delicious way of saving money, helping to feed the world and protect the planet.</p>
                <!-- <div class="slider_btn">
                    <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                    <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div> -->
            </div>
        </div>

        <div class="item">
            <div class="fill" style="background-image:url('img/cycle.jpg');"></div>
            <div class="carousel-caption slide-up">
                <h1 class="banner_heading">Reduces your waste by <span>65%</span></h1>
                <p class="banner_txt"> Recycling food waste will lessen the greenhouse gas emission into the environment, landfills, and transportation of waste to landfills.</p>
                <!-- <div class="slider_btn">
                    <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                    <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div> -->
            </div>
        </div>

        <div class="item">
            <div class="fill" style="background-image:url('img/farmer.jpg');"></div>
            <div class="carousel-caption slide-up">
                <h1 class="banner_heading">Divert food waste going to <span>landfil</span></h1>
                <p class="banner_txt">  Bio-slurry is rich in Nitrogen (N), Phosphorus (P), and Potassium (K) is the most required nutrients for the plants. It has humic acid hence a perfect soil conditioner. It also acts as a pesticide and organic fungicide.</p>
                <!-- <div class="slider_btn">
                    <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                    <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>

</div>
<section id="about">
    <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
        <div class="background-imgholder">
            <img src="img/1.jpg" alt="" class="img-responsive" style="display:none;" /> 
        </div>
    </div>

    <div class="container-fluid">

        <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
            <div class="text-block">
                <div class="section-heading">
                    <h1>OUR<span> MISSION</span></h1>
                    <p class="subheading">better use of food waste</p>
                </div>

                <ul class="aboutul">
                    <li> <i class="fa fa-check"></i>Did you know that about 40 % of the food produced in India is wasted?</li>
                    <li> <i class="fa fa-check"></i>Wastage of food is not indicate of only hunger or pollution, but also many economic problems in the country, such as inflation.</li>
                    <li> <i class="fa fa-check"></i>Reducing the amount of food consumers waste not only has financial benefits but also environmental benefits. </li>
                    <li> <i class="fa fa-check"></i>The aim was to make reduction in food wastage as much as we can and use wastage food in recycling process(in biogas plant) Food waste can be converted into biogas through anaerobic digestion & then used for energy production, such as natural gas, electricity etc.</li>
                    <li> <i class="fa fa-check"></i>After this the genetated slurry contains nutrients and organic matter that can be used as a fertilizer for agriculture.</li>
                    <li> <i class="fa fa-check"></i>So,we are request to all that please reduce food waste pollution.</li>
                </ul>

                <!-- <button type="button" class="btn btn-primary slide">Learn More  <i class="fa fa-caret-right"></i> </button> -->


            </div>
        </div>
    </div>
</section>



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