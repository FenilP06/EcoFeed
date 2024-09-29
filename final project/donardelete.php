<?php
if(isset($_POST['submit']))
{
$conn=mysqli_connect('localhost','root','','ckb');
$code=$_POST['D1'];
$sql="DELETE FROM `donar` WHERE `code`='$code'";
$query = mysqli_query($conn,$sql);
if($query)
{
    // header("location:donarlist.php");
    echo "<SCRIPT>
        alert('Record deleted successfully')
        window.location.replace('donarlist.php')</script>";
}
else
{
    echo "<SCRIPT>
        alert('Unable to delete successfully')
        window.location.replace('donarlist.php')</script>";
    // echo "Record not deleted";
}
mysqli_close($conn);
}
?>