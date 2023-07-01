<?php
session_start();
// session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?php
                    if (isset($_SESSION['loggedin']) == true) {
                        echo '<a class="nav-link" href="home3.php">Home</a>';
                    } else {
                        echo '<a class="nav-link" href="home3.php">Home</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mensfashion.php">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="womenfashion.php">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="baby.php">Baby</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My cart</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        if (isset($_SESSION['cart'])) {


                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;

                                echo "
                                <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                <td> <form action='managecart.php' method='post'><input class='qt iquantity' name='cost' type='number' onchange='this.form.submit()' value=$value[Quantity] min='1' max='10'></input>
                                
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'></input></form></td>
                                <td class='itotal'></td>
                                <td>
                                <form action='managecart.php' method='post'><button  class='btn btn-sm btn-danger' name='remove' >REMOVE</button>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'></input></form></td>
                                </tr>
                                ";


                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h3>Grand Total : </h3><br>
                   
                        <h5 class="text-right" id="gtotal">
                        
                        </h5>
                        <br>
                        <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {
                        ?>
                        <form action="payment1.php" method="post"> 
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Mobile Number</label>
                            <input type="number" name="no" class="form-control" minlength="10" maxlength="10" required>
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"required>
                        </div>
                        <button class="btn btn-primary btn-block my-3" name="purchase">Purchase</button>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');
        function subtotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }
        subtotal();
    </script>
</body>

</html>