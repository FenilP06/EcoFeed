<?php
if (isset($_POST['sub']))
 {
    $conn = mysqli_connect('localhost', 'root', '', 'ckb');
    if (!$conn) {
        echo "Failed to connect to database";
    }

    $ucat = $_POST['ucat'];
    $uname = $_POST['unm'];
    $pass = $_POST['pwd'];
    $password = password_hash($pass,PASSWORD_DEFAULT);
    // $password = $_POST['pwd'];
    $email = $_POST['em'];
    $name = $_POST['nm'];
    $address = $_POST['add'];
    $mobno = $_POST['pn'];
    $secque = $_POST['SECQUE'];
    $secans = $_POST['SECANS'];
    
        $sql = "INSERT INTO `users`(`usercat`, `username`, `name`, `email`, `password`, `phone`, `address`, `question`, `answer`) VALUES ('$ucat','$uname','$name','$email','$password','$mobno','$address','$secque','$secans')";

        if (mysqli_query($conn, $sql)) {
            
          echo "<SCRIPT>
          alert('Registration done')
          window.location.replace('registration.html');</SCRIPT>";
        }
         else {
            echo "<SCRIPT>
            alert('Unable to register please try again')
            window.location.replace('registration.html');</SCRIPT>";
        }
    
    mysqli_close($conn);
}
?>