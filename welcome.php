<?php
require 'connection.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    img{
        height:70px;
        width:100px;
    }
    
</style>
<body>
    <nav class="navbar  bg-dark-body-tertiary navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="brand1-removebg-preview.png" alt=""></a>
            <form action="out.php" method="post">
                <button class="btn btn-success my-2 my-sm-0 mx-5" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <table class="table table-dark table-dark mt-5">

                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone no.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pay Mode</th>
                            <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM `order manager`";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                            echo "
                                <tr>
                            <td>$user_fetch[Order_ID]</td>
                            <td>$user_fetch[Full_Name]</td>
                            <td>$user_fetch[Phone]</td>
                            <td>$user_fetch[Address]</td>
                            <td>$user_fetch[Pay_Mode]</td>
                            <td>
                            <table class='table table-dark table-dark  mt-5'>

                            <thead>
                                <tr>
                                    <th scope='col'>Item Name</th>
                                    <th scope='col'>Price</th>
                                    <th scope='col'>Quantity</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            ";
                            $order_query="SELECT * FROM `user_orders` WHERE `Order_ID`='$user_fetch[Order_ID]'";
                            $order_result=mysqli_query($con,$order_query);
                            while($order_fetch=mysqli_fetch_assoc($order_result))
                            {
                                echo"
                                <tr>
                                <td>$order_fetch[Item_Name]</td>
                                <td>$order_fetch[Price]</td>
                                <td>$order_fetch[Quantity]</td>
                                </tr>
                                ";
                            }
                            echo "
                        </tbody>
                        </table>
                            </td>
                        </tr>";
                        }

                        ?>





            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>