<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "Infinity";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = false;
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    if ($Email == "" && $Password == "") {
        echo '<script>alert("Fill the mandatory fields");
            window.location.href="signin.html";</script>';

    } else {
        $sql = "Select * FROM registration WHERE Email='$Email' AND Password='$Password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['Email'] = $Email;
            echo '<script>alert("Login successful");
            window.location.href="home3.php"</script>';
            

        } else {
            $_SESSION['loggedin'] = false;
            echo '<script>alert("Invalid Credentials");
            window.location.href="signin.html";</script>';
        }
    }
}
?>