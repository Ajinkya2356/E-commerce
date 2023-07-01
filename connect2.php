<?php
$FN = $_POST['firstname'];
$LN = $_POST['lastname'];
$Username= $_POST['username'];
$Email = $_POST['Email'];
$Addresses = $_POST['add13'];
$state=$_POST['state'];
$country=$_POST['country'];
$Pincode=$_POST['pin'];
//Database connection
$conn = new mysqli('localhost', 'root', '', 'Infinity');
if ($conn->connect_error) {
    die(`connection failed :  ` . $conn->connect_error);
} else {
    if (!empty($FN) && !empty($LN) && !empty($Username)) {
        $stmt = $conn->prepare("insert into payment(First_Name,Last_Name,Username,Email,Address,Pincode)values(?, ?, ?,?,?,?)");
        $stmt->bind_param("sssssi", $FN,$LN,$Username,$Email,$Addresses,$Pincode);
        $execval = $stmt->execute();
        // echo $execval;
        echo '<script>alert("Successfully added")
        window.location.href="payment.php"</script>';
       
    }
    else{
        echo' <script>alert("Fill the required fields");
        window.location.href="payment.php"</script>';
    }
    $stmt->close();
    $conn->close();
}
?>