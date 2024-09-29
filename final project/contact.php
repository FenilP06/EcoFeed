<?php

if(isset($_POST['sub']))
{
    $conn = mysqli_connect('localhost','root','','ckb');
    if(!$conn)
    {
        echo "failed to connect to database";
    }
    $name = $_POST['nm'];
    $email = $_POST['em'];
    $phone = $_POST['pn'];
    $compname = $_POST['cn'];
    $subject = $_POST['subj'];
    $message = $_POST['msg'];
    
    $sql = "INSERT INTO `feedback`(`name`, `email`, `phone`, `company_name`, `subject`, `message`) VALUES ('$name','$email','$phone','$compname','$subject','$message')";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo "<SCRIPT>
        alert('Thanks for sharing from valuable feedback ')
        window.location.replace('contact.html');
    </SCRIPT>";
    }
    else{
        echo "<SCRIPT>
        alert('Sorry! failed to capture feedback, Please try again ')
        window.location.replace('contact.html');
    </SCRIPT>";
    }
    mysqli_close($conn);
}

?>