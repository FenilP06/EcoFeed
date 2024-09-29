<?php
if(isset($_POST['sub']))
{
$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "failed to connect to database";
}
$uname = $_POST['unm'];
$email = $_POST['em'];
$phone = $_POST['pn'];
$address = $_POST['add'];
$answer = $_POST['ans'];

$sql = "UPDATE `users` SET `email`='$email',`phone`= '$phone',`address`='$address',`answer`='$answer' WHERE `username` = '$uname' ";
$query = mysqli_query($conn,$sql);
if($query)
{
    // header("location:registrationlist.php");
    echo "<SCRIPT>
        alert('Updation done to record')
            window.location.replace('registrationlist.php')</SCRIPT>";
}
else
{
    echo "<script>
     alert('Cannot update record')
    window.location.replace('registrationlist.php')</script>";
    // echo "Cannot update details";
}
mysqli_close($conn);
}
?>