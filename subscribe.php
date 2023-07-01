<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "Infinity";
$Email = $_POST['Email'];
session_start();
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}
$exists = false;
$existsSql = "SELECT * FROM `newsletter` WHERE Email='$Email'";
$result = mysqli_query($conn, $existsSql);
$numExistsRows = mysqli_num_rows($result);
if ($numExistsRows > 0) {
    $exists = true;

} else {
    $exists = false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['loggedin']) == true) {
        if ($_POST['Email'] != "") {
            if ($exists == false) {
                $stmt = $conn->prepare("insert into Newsletter( Email, Username)values(?, ?)");
                $stmt->bind_param("ss", $Email, $_SESSION['Email']);
                $execval = $stmt->execute();
                echo '<script>alert("Subscribed Successfully");
                window.location.href="home3.php";</script>';
                $stmt->close();
                $conn->close();
            } else {
                echo '<script>alert("Already Subscribed");
                window.location.href="home3.php";</script>';
            }

        } else {
            echo '<script>alert("Fill the manadatory fields");
        window.location.href="home3.php";</script>';
        }
    } else {
        echo '<script>alert("sign in first");
        window.location.href="home3.php";</script>';
    }
}
?>