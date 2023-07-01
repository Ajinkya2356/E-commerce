<?php
session_start();
// session_destroy();
$conn = mysqli_connect("localhost", "root", "", "Infinity");
if (mysqli_connect_error()) {
    echo '
    <script>
    alert("Database connection failed");window.location.href="cart.php"</script>';
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['loggedin']) == true) {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order manager`(`Full_Name`, `Phone`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[no]','$_POST[address]','[COD]')";
        if (mysqli_query($conn, $query1)) {
            $Order_ID = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_orders`(`Order_ID`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $query2);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isis", $Order_ID, $Item_name, $Price, $Quantity);
                foreach ($_SESSION['cart'] as $key => $value) {
                    $Item_name = $value['Item_Name'];
                    $Price = $value['Price'];
                    $Quantity = $value['Quantity'];
                    $_SESSION['Full_Name']=$_POST['fullname'];
                    $_SESSION['no']=$_POST['no'];
                    $_SESSION['Address']=$_POST['address'];
                   
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo ' <script>
                alert("Order Placed");window.location.href="invoice2.php"</script>';
                
            } else {
                echo '
    <script>
    alert("Error Query");window.location.href="cart.php"</script>';
                exit();
            }
        } else {
            echo '
    <script>
    alert("Error");window.location.href="cart.php"</script>';
            exit();
        }
    }
}
?>