<?php
if(isset($_POST['sub']))
{
$conn = mysqli_connect('localhost', 'root', '', 'ckb');
if (!$conn) {
    echo "Failed to connect to database";
}
$username=$_POST['unm'];
$ques=$_POST['que'];
$ans=$_POST['ans'];
$sql="SELECT `username`, `question`, `answer` FROM `users` WHERE `username` = '$username' AND `question` = '$ques' AND `answer` = '$ans'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
    echo "<SCRIPT>
    alert('Wrong Credential ')
    window.location.replace('index.html')</script>";
}       
$check = mysqli_fetch_assoc($result);
if($check)
{
    session_start();
    $_SESSION['username'] = $username;
    header("location:rst.html");
}
else{
    echo "<SCRIPT>
    alert('Wrong Credential ')
    window.location.replace('index.html')</script>";  
}



}

?>
