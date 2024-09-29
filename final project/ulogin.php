<?php
if(isset($_POST['sub']))
{
$conn=mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect to database";
}
$cat = $_POST['ucat'];
$uname = $_POST['unm'];
$pass = $_POST['pwd'];

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d h:i:s a', time());
$sql = "SELECT `usercat`, `username`, `password` FROM `users` WHERE `username`='$uname'";
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "<SCRIPT>
    alert('Wrong username')
    window.location.replace('login1.html');</SCRIPT>";
}
while($row = mysqli_fetch_assoc($query))
{
    $usercat = $row['usercat'];
    $username = $row['username'];
    $password = $row['password'];
}
if($cat == "Donar")
{
if($cat == $usercat)
{


    if($uname == $username)
    {
        $verify = password_verify($pass,$password);
        if($verify)
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['usercat'] = $usercat;
            $sql = "INSERT INTO `login`(`usercat`, `username`, `password`, `logintime`) VALUES ('$usercat','$username','$password','$date')";
            $query=mysqli_query($conn,$sql);
            header("location:uindex.php");
        }
        else
        {
            // echo "hello1";
            echo "<SCRIPT>
            alert('Wrong credentials ')
            window.location.replace('login1.html')</SCRIPT>";
        }
    }
    else
    {
        // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
    }
}
else
{
  /*  echo "<script> alert('wrong credentials');
    window.location.replace(adminlogin.html)"
    */
    echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html');
    </SCRIPT>";
}
}
elseif ($usercat == "Bio-Plant")
{
 if($cat == $usercat)
{
    if($uname == $username)
    {
         $verify = password_verify($pass,$password);
        if($verify)
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['usercat'] = $usercat;
            $sql = "INSERT INTO `login`(`usercat`, `username`, `password`, `logintime`) VALUES ('$usercat','$username','$password','$date')";
            $query=mysqli_query($conn,$sql);
            header("location:uindex.php");
        }
        else
        {
            echo "<SCRIPT>
            alert('Wrong credentials ')
            window.location.replace('login1.html')</SCRIPT>";
        }
    }
    else
    {
        // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
    }
}
else
{
  /*  echo "<script> alert('wrong credentials');
    window.location.replace(adminlogin.html)"
    */
    echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html');
    </SCRIPT>";
}   
}
elseif ($usercat == "Volunteer")
{
 if($cat == $usercat)
{
    if($uname == $username)
    {
         $verify = password_verify($pass,$password);
        if($verify)
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['usercat'] = $usercat;
            $sql = "INSERT INTO `login`(`usercat`, `username`, `password`, `logintime`) VALUES ('$usercat','$username','$password','$date')";
            $query=mysqli_query($conn,$sql);
            header("location:uindex.php");
        }
        else
        {
           
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
        }
    }
    else
    {
        // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
    }
}
else
{
  /*  echo "<script> alert('wrong credentials');
    window.location.replace(adminlogin.html)"
    */
    echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html');
    </SCRIPT>";
}   
}
elseif ($usercat == "Transporter")
{
 if($cat == $usercat)
{
    if($uname == $username)
    {
         $verify = password_verify($pass,$password);
        if($verify)
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['usercat'] = $usercat;
            $sql = "INSERT INTO `login`(`usercat`, `username`, `password`, `logintime`) VALUES ('$usercat','$username','$password','$date')";
            $query=mysqli_query($conn,$sql);
            header("location:uindex.php");
        }
        else
        {
            // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
        }
    }
    else
    {
        // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
    }
}
else
{
  /*  echo "<script> alert('wrong credentials');
    window.location.replace(adminlogin.html)"
    */
    echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
}   
}
elseif ($usercat == "Farmer")
{
    if($cat == $usercat)
    {
        if($uname == $username)
        {
             $verify = password_verify($pass,$password);
        if($verify)
        {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['usercat'] = $usercat;
            $sql = "INSERT INTO `login`(`usercat`, `username`, `password`, `logintime`) VALUES ('$usercat','$username','$password','$date')";
            $query=mysqli_query($conn,$sql);
            header("location:uindex.php");
        }
            else
            {
                // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
            }
            
        }
        else
        {
           
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
        }
        
    }
    else
    {
        // echo "hello1";
         echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login1.html')</SCRIPT>";
    }
}
mysqli_close($conn);




}





?>
