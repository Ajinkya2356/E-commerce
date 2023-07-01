<?php
$Email = $_POST['Email'];
$psw = $_POST['Password'];
$addresss = $_POST['Address'];
$city = $_POST['City'];
$states = $_POST['State'];
//Database connection
$conn = new mysqli('localhost', 'root', '', 'Infinity');
if ($conn->connect_error) {
    die(`connection failed :  ` . $conn->connect_error);
} else {
    if ($Email == "" && $psw == "") {
        echo '<script>alert("Fill the mandatory fields");
        window.location.href="registration.html";</script>';

    } else {
        $exists = false;
        $existsSql = "SELECT * FROM `registration` WHERE Email='$Email'";
        $result = mysqli_query($conn, $existsSql);
        $numExistsRows = mysqli_num_rows($result);
        if ($numExistsRows > 0) {
            $exists = true;
            echo'<script>alert("Username already used");
            window.location.href="registration.html"</script>';
        } else {
            $exists = false;
        }
        if ($exists == false) {
            $stmt = $conn->prepare("insert into registration( Email, Password , Address, City, State)values(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $Email, $psw, $addresss, $city, $states);
            $execval = $stmt->execute();
            // echo $execval;
            echo 'Registration successful';
            header('location: signin.html');
            $stmt->close();
            $conn->close();
        }

    }

}
?>