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
    <title>My Wishlist</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home3.php">Home</a>
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
                <h1>My Wishlist</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        if (isset($_SESSION['wishlist'])) {


                            foreach ($_SESSION['wishlist'] as $key => $value) {
                                $sr = $key + 1;

                                echo "
                                <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]</td>
                                <td>
                                <form action='managecart.php' method='post'><button  class='btn btn-sm btn-success' name='mycart1' >Add to cart</button>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'></input>
                                <input type='hidden' name='Price' value='$value[Price]'></input>
                                </form></td>
                                </tr>
                                ";


                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>