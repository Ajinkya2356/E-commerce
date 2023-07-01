<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newpassword = $_POST["nPassword"];
    $cpassword = $_POST["cPassword"];
    $usermail = $_SESSION["Email"];
    $conn = mysqli_connect('localhost', 'root', '', 'Infinity');
    if ($conn->connect_error) {
        die(`connection failed :  ` . $conn->connect_error);
    } else {

        if ($newpassword != "" AND ($newpassword == $cpassword)) {
            $sql = mysqli_query($conn,"UPDATE registration SET Password='$newpassword' where Email='$usermail'");
            if ($sql) {
                echo '<script>alert("Congratulations You have successfully changed your password");
                window.location.href="signin.html"</script>';
                
            } 
        }
        else {
            echo '<script>alert("Passwords do not match");
                window.location.href="signin.html"</script>';
        }
    }
}

?>