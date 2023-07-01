<?php
$Email = $_POST['Email'];
$Name = $_POST['Name'];
$Query = $_POST['Query'];
//Database connection
$conn = new mysqli('localhost', 'root', '', 'Infinity');
if ($conn->connect_error) {
    die(`connection failed :  ` . $conn->connect_error);
} else {
    if (!empty($Email) && !empty($Name) && !empty($Query)) {
        $stmt = $conn->prepare("insert into customercare( Email, Name,Query)values(?, ?, ?)");
        $stmt->bind_param("sss", $Email, $Name, $Query);
        $execval = $stmt->execute();
        // echo $execval;
        echo ' <script>alert("Query submitted. Our team will contact you soon.");
        window.location.href="support.html"</script>';
       
    }
    else{
        echo' <script>alert("Fill the required fields");
        window.location.href="support.html"</script>';
    }
    $stmt->close();
    $conn->close();
}
?>