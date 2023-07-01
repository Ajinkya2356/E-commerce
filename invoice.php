<?php
session_start();
// session_destroy();
$con = mysqli_connect("localhost", "root", "", "Infinity");
$Name='$_SESSION[Full_Name]';
if (mysqli_connect_error()) {
    echo '
    <script>
    alert("Database connection failed");window.location.href="cart.php"</script>';
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #F6F6F6;
        margin: 0;
        padding: 0;
    }

    #h2 {
        position: absolute;
        top: 3%;
        left: 43%;
        font-size: 40px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    p {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
    }

    .brand-section {
        background-color: #0f0f0f;
        padding: 10px 20px;
    }

    .logo {
        width: 50%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-6 {
        width: 50%;
        flex: 0 0 auto;
    }

    .text-white {
        color: #fff;
    }

    .company-details {
        float: right;
        text-align: right;
    }

    .body-section {
        padding: 16px;
        border: 1px solid gray;
    }

    .heading {
        font-size: 20px;
        margin-bottom: 08px;
    }

    .sub-heading {
        color: #262626;
        margin-bottom: 05px;
    }

    table {
        background-color: #fff;
        width: 80%;
        border-collapse: collapse;
    }

    table thead tr {
        border: 1px solid #111;
        background-color: #f2f2f2;
    }

    table td {
        vertical-align: middle !important;
        text-align: left;
    }

    table th,
    table td {
        padding-top: 08px;
        padding-bottom: 08px;
    }

    .table-bordered {
        box-shadow: 0px 0px 5px 0.5px gray;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6;
    }

    .text-right {
        text-align: end;
    }

    .w-20 {
        width: 20%;
    }

    .float-right {
        float: right;
    }

    input {
        width: 70%;
        border: none;
    }

    #rn {
        color: red;
        font-weight: bold;
    }
    #p{
        position:absolute;
        left:40%;
        top:85%;
        height:40px;
        width:80px;
        font-size:20px;
        background-color:#007bff;
        border:#007bff;
        border-radius:7px;
        cursor:pointer;
        color:white;
    }
    #c{
        position:absolute;
        left:50%;
        top:85%;
        height:40px;
        width:80px;
        font-size:20px;
        background-color:#007bff;
        border:#007bff;
        border-radius:7px;
        cursor:pointer;
        color:white;
    }
</style>

<body>
    <div class="container">
        <div class="brand-section">
            <center>
                <h2 id="h2" class="text-white pt-5">Invoice</h2>
            </center>
            <div class="row">
                <div class="col-6">
                    <h2 class="text-white"><img src="brand1-removebg-preview.png" alt=" " width="100" height="80">

                    </h2>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">Surkhet, NP12</p>
                        <p class="text-white">Bandra sector-06,Mumbai</p>
                        <p class="text-white">Maharashtra</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h3>
                        <p class="sub-heading">Username &nbsp; &nbsp; : &nbsp;
                            <input type="text" value="<?php echo $_SESSION['Email']; ?>">
                        </p>
                        <p class="sub-heading">Full Name &nbsp; &nbsp; : &nbsp;
                            <input type="text" value="<?php echo $_SESSION['Full_Name']; ?>">

                        </p>
                        <p class="sub-heading">Mobile No &nbsp; &nbsp; : &nbsp;
                            <input type="text" value="<?php echo $_SESSION['no']; ?>">

                        </p>

                        <p class="sub-heading">DATE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : &nbsp;
                            <span id="date"></span>
                        </p>
                    </h3>
                    </script>
                </div>

                <div class="col-6">
                    <h2 class="heading">Address:-</h2><b>
                        <p><input type="text" value="<?php echo $_SESSION['Address']; ?>"></p>
                    </b>
                    <hr><b><i>
                            <h3>
                                <p class="sub-heading">Receipt No &nbsp; &nbsp; : <span id="rn">
                                        
                                    </span>

                        </i></b></p>
                    </h3>
                </div>
            </div>
        </div>
        <div class="body-section">
            <h1 class="heading">
                <center><u><i>RECEIPT</i></u></center>
            </h1>
            <h3 class="sub-heading">
            </h3>
                <table class="table  table-dark table-dark mt-5">

                    <thead>
                        <tr>
                           
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone no.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Products</th>
                            
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        $query = "SELECT * FROM `order manager` WHERE `Full_Name`='$_SESSION[Full_Name]'";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                            echo "
                                <tr>
                                <td>$user_fetch[Full_Name]</td>
                                <td>$user_fetch[Phone]</td>
                                <td>$user_fetch[Address]</td>
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
                        
                        </td>
                        </tr>
                        </tbody>
                        </table>";
                        }  
                    ?>
                    </tbody>
                    </table>
                </center>
                <h3 class="heading"> Total Amount Paid &nbsp;
                </h3>
                <h3 class="heading"></h3></br>
                <div>
                    <p>This is computer generated Receipt. No Signature required. Thanking you for payment.</p>
                </div>
        </div>
        <button id="p" type="submit" onclick="printfunction()">Print</button>
        <button id="c" type="submit" onclick="redirect()">Close</button>

</body>
<script defer>
    document.getElementById("date").innerHTML = new Date().toLocaleDateString();
    function printfunction(){
        window.print();
    }
    function redirect()
    {
        alert("Thank you");
        window.location.href="home3.php";
    }
    
</script>

</html>