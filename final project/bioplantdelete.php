<?php
if(isset($_POST['submit']))
{
$conn=mysqli_connect('localhost','root','','ckb');
$code=$_POST['D1'];
$sql="DELETE FROM `bio_plant` WHERE `code`='$code'";
if(mysqli_query($conn,$sql))
{
    // header("location:bioplantlist.php");
    echo "<SCRIPT>
        alert('record deleted successfully')
        window.location.replace('bioplantlist.php')</script>";
}
else
{
    echo "<SCRIPT>
    alert('cannot delete record')
    window.location.replace('bioplantlist.php')</script>";
}
mysqli_close($conn);
}
?>