<?php
$username='Root';
$password='Admin@123';
if(($_POST['username']==$username) && ($_POST['psw']==$password))
{
    $_SESSION['login']=true;
    echo '<script>alert("Login Successful");
    window.location.href="welcome.php";</script>';
}
else{
    echo '<script>alert("Invalid Credentials");
    window.location.href="index.php";</script>';
}
?>