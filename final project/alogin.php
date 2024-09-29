<?php
if(isset($_POST['sub']))
{
$conn=mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "Failed to connect to database";
}
$ucat = $_POST['ucat'];
$uname = $_POST['unm'];
$pass = $_POST['pwd'];
// $password = $_POST['pwd'];
// $pass = md5($pass1);
date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d h:i:s a',time());
$sql = "SELECT `usercat`, `username`, `password` FROM `users` WHERE `username`='$uname'";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query))
{
    $usercat = $row['usercat'];
    $username = $row['username'];
    $password = $row['password'];
}
if($ucat == $usercat)
{
    if($uname == $username)
    {
        $verify = password_verify($pass,$password);
        // $verify = password_verify($password);
        if($verify)
        {
            session_start();
            $_SESSION['username'] = $username;
            $sql1 = "INSERT INTO `login`(`usercat`, `username`, `password`, `logintime`) VALUES ('$usercat','$username','$password','$date')";
            $query1=mysqli_query($conn,$sql1);
            header('location:adminhome.html');
        }
        else
        {
            echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login.html');
    </SCRIPT>"; 
        }
    }
    else
    {
       echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login.html');
    </SCRIPT>";
    }
}
else
{
  
    echo "<SCRIPT>
        alert('Wrong credentials ')
        window.location.replace('login.html');
    </SCRIPT>";
}






mysqli_close($conn);
}




?>
