<?php
if(isset($_POST['sub']))
{
$conn = mysqli_connect('localhost','root','','ckb');
if(!$conn)
{
    echo "failed to connect database";
}
$code=$_POST['cd'];
$name=$_POST['nm'];
$phone=$_POST['pn'];
$email=$_POST['em'];
$address=$_POST['ad'];
$annual_income=$_POST['ai'];
$total_land=$_POST['tl'];
$sql = "INSERT INTO `farmer`(`code`, `name`, `phone`, `email`, `address`, `annual_income`, `tland_area`) VALUES ('$code','$name','$phone','$email','$address','$annual_income','$total_land')";
if(mysqli_query($conn,$sql))
{
    echo "<SCRIPT>
    alert('data inserted ')
    window.location.replace('farmer.html')</script>";
}
else
{
    echo "<SCRIPT>
        alert('Unable to insert record! please try again')
        window.location.replace('farmer.html')</script>";
}

mysqli_close($conn);
}
?>