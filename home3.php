<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        height: 240vh;
    }

    .container2 {
        /* border: 2px solid black; */
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        position: absolute;
        top: 110%;
        left: 35%;
        height: 250px;
        width: 30%;
        text-align: center;
        font-size: 30px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-image: url("https://images.unsplash.com/photo-1485462537746-965f33f7f6a7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHdvbWVucyUyMGZhc2hpb24lMjB3aXRoJTIwYmxhY2slMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60");
        background-repeat: no-repeat;
        background-size: 470px;
        background-position-x: cover;
        background-position-y: -100px;
        border-radius: 10px;
        border-style: groove;
    }

    .container3 {
        /* border: 2px solid black; */
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        position: absolute;
        top: 110%;
        left: 70%;
        height: 250px;
        padding-left: 1px;
        width: 30%;
        text-align: center;
        font-size: 30px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-image: url("https://images.unsplash.com/photo-1556294778-037d36802a75?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjQxfHxiYWJ5J3MlMjBmYXNoaW9ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60");
        background-repeat: no-repeat;
        background-position-x: center;
        background-position-y: -400px;
        background-size: 507px;
        border-radius: 10px;


        /* border-style: groove; */
    }

    .container1 a {
        text-decoration: none;
        color: antiquewhite;

        position: absolute;
        top: 50%;
        left: 30%;


    }

    .container2 a {
        text-decoration: none;
        color: antiquewhite;
        position: absolute;
        top: 50%;
        left: 30%;

    }

    .container3 a {
        text-decoration: none;
        color: white;
        position: absolute;
        top: 50%;
        left: 30%;

    }

    .container1 a:hover,
    .container2 a:hover,
    .container3 a:hover {
        color: grey;


    }

    .container1 {
        /* border: 2px solid black; */
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        position: absolute;
        top: 110%;
        height: 250px;
        width: 30%;
        text-align: center;
        font-size: 30px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-image: url("men1.avif");

        background-repeat: no-repeat;
        background-size: 509px;
        background-position-x: center;
        background-position-y: -90px;
        border-radius: 10px;
        /* border-style: groove; */

        /* box-shadow:1px 2px rgb(206, 200, 200); */
    }

    .container1:hover,
    .container2:hover,
    .container3:hover {

        transform: scale(0.9);
    }

    footer {
        position: absolute;
        top: 210%;
        width: 100%;
        padding-top: 50px;


    }

    .salescontainer {
        position: absolute;
        top: 150%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;

    }

    h3 {
        position: absolute;
        top: 145%;
    }

    .cont2 {
        /* border: 2px solid rgb(2, 2, 2); */
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        display: inline-block;
        margin-right: 15px;
        height: 280px;
        position: absolute;
        top: 18%;
        left: 72%;
        width: 400px;
        margin-left: 15px;
        background-image: url('https://d1csarkz8obe9u.cloudfront.net/posterpreviews/shoes-collection-ads-design-template-3aa0dfa896686a7f1e612ba25a7d682a_screen.jpg?ts=1661502336');
        background-size: cover;
        background-position: center;
        background-position-y: 350px;
        border: 0px black;
        border-radius: 7px;
    }

    .cont2 p {
        color: rgb(255, 250, 250);
        font-size: 30px;
        font-weight: bold;
        position: absolute;
        top: 4%;
        left: 16%;
    }

    .cont2 input {
        position: absolute;
        top: 80%;
        left: 38%;
        border: 2px solid black;
        background-color: 2px solid aqua;
        font-size: 20px;
        font-weight: bold;
        border-radius: 7px;
        color: rgb(12, 11, 11);
        padding: 10px;

    }

    .cont3 {
        /* border: 2px solid rgb(2, 2, 2); */
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        display: inline-block;
        margin-right: 15px;
        height: 300px;
        position: absolute;
        top: 55%;
        left: 72%;
        width: 400px;
        margin-left: 15px;
        background-image: url('https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fashion-sale-%7C-mens-clothing-sale-flyer-ad-design-template-b5062165e25ec65eb672d05ef5ff5225_screen.jpg?ts=1606886779');
        background-size: cover;
        border: 0px black;
        border-radius: 7px;


    }

    .cont3 p {
        color: rgb(12, 0, 0);
        font-size: 30px;
        font-weight: bold;
        position: absolute;
        top: 60%;
        left: 29%;
    }

    .cont3 input {
        position: absolute;
        top: 80%;
        left: 38%;
        border: 2px solid black;
        background-color: 2px solid aqua;
        font-size: 20px;
        font-weight: bold;
        border-radius: 7px;
        color: rgb(12, 11, 11);
        padding: 10px;
    }

    /* .cont3 input:hover {
        background-color: yellow;
        color: rgb(46, 3, 3);
        border: transparent;
        padding: 0px;
    } */

    /* .cont2 input:hover {
        background-color: yellow;
        color: rgb(46, 3, 3);
        border: transparent;
        padding: 0px;
    } */

    .card {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    #time {
        font-weight: bold;
        font-size: 30px;
    }

    .timer p {
        font-weight: bold;
        font-size: 30px;
    }

    .timer {
        position: absolute;
        top: 95%;
        /* border:2px solid black; */
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 25px;
        height: 50px;
        padding-top: 5px;
        margin-bottom: 15px;
        background-color: rgb(187, 220, 255);

    }

    .tagline {
        border: 2px solid black;
        position: absolute;
        top: 10%;
        height: 6%;
        display: block;
        margin-bottom: 15px;
        width: 100%;
        text-align: center;
        color: white;
        background-color: black;
        padding-top: 12px;
    }

    .tagline a {
        color: white;
        text-decoration: underline;
    }

    .card {
        height: 370px;
    }

    .card img {
        height: 190px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
    }

    .btn {
        margin-top: 15px;
        position: absolute;
        top: 85%;
        left: 20%;
    }

    .col-auto button {
        position: absolute;
        top: 10%;
    }

   
</style>

<script src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>

<body >
    <nav class="navbar mb-5 navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container-fluid">
            <img style="height:70px; width:70px;" src="brand1-removebg-preview.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ml-5">
                        <h4><a class="nav-link font-weight-bold text-light" aria-current="page"
                                href="home3.php">Home</a></h4>
                    </li>
                    <li class="nav-item ml-5">
                        <h4><a class="nav-link text-light font-weight-bold" href="mensfashion.php">Men</a></h4>
                    </li>
                    <li class="nav-item ml-5">
                        <h4><a class="nav-link text-light font-weight-bold" href="womenfashion.php">Women</a></h4>
                    </li>
                    <li class="nav-item ml-5">
                        <h4><a class="nav-link text-light font-weight-bold" href="baby.php">Kids</a></h4>
                    </li>
                    <li class="nav-item ml-5">
                        <h4><a class="nav-link text-light font-weight-bold" href="support.html">Contact Us</a></h4>
                    </li>
                    <li class="nav-item ml-5  ">
                        <h4 id="a1"><a class="nav-link text-light font-weight-bold  " href="wishlist.php"><i
                                    class="fa-solid fa-heart text-danger"></i> &nbsp;My Wishlist</a></h4>
                    </li>
                    <li class="nav-item ml-5  ">
                        <h4 id="a1"><a class="nav-link text-light font-weight-bold  " href="cart.php"><i
                                    class="fa-solid fa-cart-shopping "></i></a></h4>
                    </li>
                    <?php
                    if (isset($_SESSION['loggedin']) == true) {
                        echo '<li class="nav-item ml-5">
                    <h4><a class="nav-link  text-light font-weight-bold " href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>&nbsp; Sign out</a></h4>
                </li>';
                    } else {

                        echo '<script>alert("Sign in to continue");</script>';
                        echo ' <li class="nav-item ml-5">
                        <h4><a class="nav-link  text-light font-weight-bold " href="registration.html"><i
                                    class="fa-solid fa-user-large "></i>&nbsp; Sign in</a></h4>
                    </li>';
                    }
                    ?>

                </ul>

                <!-- <form class="d-flex col-xs-2 float-right mt-3  font-weight-bold" role="search">

                    <input class="form-control inputsm rounded mr-5" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success font-weight-bold mt-2" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <div class="tagline">
        <?php
        if (isset($_SESSION['loggedin']) == true) {
            echo '<p>Save up to 50% Hurry Up! <a href="mensfashion.php">Shop Now</a></p>';
        } else {

            echo '<p>Save up to 50% Hurry Up! <a href="home3.php">Shop Now</a></p>
            ';
        }
        ?>
    </div>

    <div class="cont2">
        <?php
        if (isset($_SESSION['loggedin']) == true) {
            echo '<a href="mensfashion.php"><input type="submit" value="Shop Now"></a>';
        } else {
            echo '<a href="home3.php"><input type="submit" value="Shop Now"></a>';
        }
        ?>
    </div>
    <div class="cont3">
        <div class="test"></div>

        <?php
        if (isset($_SESSION['loggedin']) == true) {
            echo '<a href="mensfashion.php"><input type="submit" value="Shop Now"></a>';
        } else {
            echo '<a href="home3.php"><input type="submit" value="Shop Now"></a>';
        }
        ?>
    </div>

    <div class="timer">

        <p>Sales Ends In &nbsp;&nbsp; <span id="time"></span></p>
    </div>
    <div class="container float-left ">
        <div id="myCarousel" class="carousel slide mb-5 mt-5 max-width: 100%;" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="a1.png" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="s5.png" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="a3.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container1 ">
        <a href="mensfashion.php">
            <div><br><br>Men's Fashion</div>
        </a>
    </div>
    <div class="container2">
        <a href="womenfashion.php">
            <div><br><br>Women's Fashion</div>
    </div>
    </div>
    <div class="container3">
        <a href="baby.php">
            <div><br><br>Baby's Fashion</div>
        </a>
    </div>
    <h3 class="ml-3">Trending this week</h3>
    <div class="salescontainer">

        <div class="card shadow mt-5 ml-5" style="width: 18rem;">
            <img class="" src="https://m.media-amazon.com/images/I/71w7x5SUXyL._AC_UX569_.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Youth Hooded Sweatshirt, Style G18500B</h5>
                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>

        </div>
        <div class="card mt-5 ml-5" style="width: 18rem;">
            <img class="card-img-top " src="https://m.media-amazon.com/images/I/514weKQX7vL._AC_UL320_.jpg"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">True Classic Premium <br>
                    Mens T-Shirts Size S to XXXL</h5>
                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
        <div class="card mt-5 ml-5" style="width: 18rem; ">
            <img class="card-img-top" src="https://m.media-amazon.com/images/I/81YkqwL-PlL._AC_UL320_.jpg"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Calvin Klein Mallory Nylon <br>Branding Tote</h5>

                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
        <div class="card mt-5 ml-5" style="width: 18rem;">
            <img class="card-img-top"
                src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSZHH0xVf-VOx11y4OwuJvFEZACjNeZi6oiMWwSjYjoRH4A9SOD4qowuiyhXUJ6FkqYT0bEB3QUi_kI6iLbOqE-bDfL6VgE2-r3GmZzR6I&usqp=CAE"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gucci 0036S 002 Black Category 3 Size 54mm<br>(black)<br></h5>

                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
        <div class="card mt-5 ml-5" style="width: 18rem;">
            <img class="card-img-top" id="h"
                src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQdLwPJPnJCEhUXJT4MqRVYL7IJa-oFcxbdoyV3Eqy7-BntJte4MyHlR3QWm3OlKRzSkPqjj2IuHsg6d0424lmH4lchPf7MBeiuxMVINz4&usqp=CAE"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Invicta Mens Pro Diver Stainless Steel Quartz Watch</h5>

                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
        <div class="card mt-5 ml-5" style="width: 18rem;">
            <img class="card-img-top" src="https://m.media-amazon.com/images/I/71b5NQZQYKL._AC_UL320_.jpg"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">ON Mens Cloud Sneakers Shoes Size 12,<br> Color: Black</h5>

                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>

    </div>
    <footer class="bg-dark text-center text-white mt-5">

        <div class="container p-4 ">

            <!-- <section class="mb-4">

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>


                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section> -->

            <section class="">
                <form action="subscribe.php" method="post">

                    <div class="row d-flex justify-content-center">

                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>

                        <div class="col-md-5 col-12">

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" name="Email" class="form-control" autocomplete="off">
                                <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>

                        <div class="col-auto">

                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>

                    </div>

                </form>
            </section>

            <section class="mb-4">

            </section>

            <section class="">

                <div class="row">

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="aboutus.html" class="text-white">About Us</a>
                            </li>
                            <li>
                                <a href="home3.php" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Feedback</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="careers.html" class="text-white">Careers</a>
                            </li>
                            <li>
                                <a href="mensfashion.php" class="text-white">Men</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="FAQ.html" class="text-white">FAQ</a>
                            </li>
                            <li>
                                <a href="womenfashion.php" class="text-white">Women</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="support.html" class="text-white">Contact Us</a>
                            </li>
                            <li>
                                <a href="baby.php" class="text-white">Baby</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </section>

        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">Infinity.com</a>
        </div>

    </footer>

</body>

<script defer>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("time").innerHTML = days + '&nbsp;' + "Day :&nbsp;" + hours + '&nbsp;' + "H :&nbsp; "
            + minutes + "M :&nbsp;" + seconds + '&nbsp;' + "S ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time").innerHTML = "EXPIRED";
        }
    }, 1000);
    
</script>

</html>