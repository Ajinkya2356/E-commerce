<html>

<head>
    <title>Myproject</title>
    <script src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("pexels-ivan-samkov-5947556.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

        }

        .mid {
            display: block;
            width: 100%;
            /* border:2px solid black; */
            margin: auto;
            top: 0px;
            left: 0px;
            list-style: none;
        }

        .mid1 {
            display: block;
            width: 66%;
            margin: -7px 277px;
            list-style: none;
        }

        .top1 {
            display: inline-block;
            /* border:2px solid black; */
            padding: 16px 8px 30px 12px;
            width: 100%;
            background-color: rgb(219, 207, 207);
            margin-top: -10px;
            margin-left: -8px;
            margin-right: 5px;
            opacity: 2;
        }

        .top2 {
            display: inline-block;
            /* border: 2px solid black; */
            padding: 39px 14px 36px 235px;
            background-color: rgb(224, 221, 221);
            width: 130%;
            margin-left: -285px;
            margin-top: -73px;
            opacity: 2;
            z-index: 1;
            /* box-shadow: 5px 5px rgb(63, 61, 61); */
        }

        .top1 li {
            display: inline-block;
            font-size: 20px;
            margin-top: -28px;
        }

        .top2 li {
            display: inline-block;
            font-size: 18px;
            margin-top: -10px;
        }

        .top2 img {
            display: inline-block;
            height: 82px;
            width: 100px;
            margin: -26px 62px -40px -106px;
            /* border: 1px solid white; */
            /* border-radius: 5px; */
        }

        .top1 li a {

            color: rgb(0, 0, 0);
            text-decoration: none;
            font-weight: bold;
            padding: 84px;
        }

        .top2 li a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-weight: bold;
            padding: 40px;
        }

        .top1 li a:hover {
            color: red;
            text-decoration: underline;
        }

        .top2 li a:hover,
        .top2 li a.active {
            color: red;
            text-decoration: underline;
        }

        .tagline {
            border: 2px solid black;
            margin: -15px -29px 51px -8px;
            background-color: black;
            width: 101%;
        }

        .sale {
            margin: 2px 5px 5px 640px;
            color: white;
        }

        .sale a {
            color: rgb(226, 151, 90);
        }

        #h11 {
            padding-left: 1px;
            padding-right: 27px;
        }

        #h12 {
            padding-left: 1px;
            padding-right: 27px;
        }

        #h13 {
            padding-left: 1px;
            padding-right: 27px;
        }

        #h14 {
            padding-left: 1px;
            padding-right: 27px;
        }

        #h15 {
            padding-left: 883px;
            padding-right: 5px;
        }

        #h16 {
            padding-left: 71px;
            padding-right: 5px;
        }

        #h28 {
            margin-left: -33px;
        }

        .top1 img {
            height: 35px;
            width: 100px;
            padding-top: 5px;
        }

        .logo {
            height: 20px;
            width: 100px;
            margin-left: 113px;
        }


        .salecontainer {
            border: 5px solid rgb(2, 2, 2);
            font-size: 50px;
            font-family: "Courgette variant0", Tofu;
            width: 32%;
            height: 500px;
            padding: 249px 0px 21px 244px;
            font-weight: bold;
            margin: 29px 5px 21px 60px;
            background: url("back.jpg");
            background-size: 875px;
            background-repeat: no-repeat;
            animation-name: imagechanger;
            animation-duration: 10s;
            animation-iteration-count: infinite;

        }

        @keyframes imagechanger {
            25% {
                background: url('fashion-sale-poster-template_23-2148633870.avif');
                background-repeat: no-repeat;
                background-size: 875px;
            }

            50% {
                background: url('https://img.freepik.com/free-vector/gradient-sales-vertical-poster-template-with-photo_23-2149001037.jpg?size=626&ext=jpg');
                background-repeat: no-repeat;
                background-size: 875px;
            }
        }

        .line {
            /* border:; */
            /* --border-bg: conic-gradient(red, yellow, lime, aqua, blue, magenta, red); */
            font-size: 20px;
            margin: -205px 0px 57px -249px;
            transform: rotate(-6deg);
            background-color: rgb(163, 16, 131);
            color: rgb(240, 205, 92);
            z-index: -1;
            animation: animatedgradient 3s ease alternate infinite;
            border: 5px solid #5df506;
            background-size: 10%;
            border-radius: 10px;
            opacity: 1;

        }

        @keyframes animatedgradient {
            0% {
                border-color: #d7e60e;
            }

            50% {
                border-color: #01132e;
            }

            100% {
                border-color: #67bce4;
            }
        }

        /* .fashion{ */
        .tagline a:hover {
            color: rgb(235, 235, 49);
        }

        #h29 input {
            margin: 3px 0px 5px -33px;
            border-radius: 10px;
            border: 2px black;
            height: 20px;
        }

        :root {
            --angle: 0deg;
        }

        .blink {
            display: flex;
            font-size: 40px;
            border: 2px solid black;
            padding: 54px 14px 54px 7px;
            margin: 308px 377px 5px -142px;
            background-color: rgb(129, 16, 22);
            height: 113px;
            width: 239px;
            border-radius: 82px;
            justify-content: center;
            align-items: center;
            /* border: 5px solid #5df506; */
            /*background-size:10%;
            border-radius:30px;
            animation: changecolor 1s linear infinite; */
            border-radius: 70px;
            /* border-image: conic-gradient(from var(--angle), red, yellow, lime, aqua, blue, magenta, red) 1; */
            /* border-image-outset: 5px; */
            /* border-image-width:5px; */
            animation: 1s rotate linear infinite;
        }

        @keyframes rotate {
            to {
                --angle: 360deg;
            }
        }

        @property --angle {
            syntax: "<angle>";
            initial-value: 0deg;
            inherits: false;
        }

        marquee span {

            color: rgb(240, 190, 27);
            animation: blink 1s linear infinite;
        }

        @keyframes blink1 {
            0% {
                opacity: 0;
            }

            25% {
                opacity: .5;
            }

            50% {
                opacity: 1;
            }

            75% {
                opacity: 1.5;
            }

            100% {
                opacity: 2;
            }
        }

        /* @keyframes changecolor {
            0% {
                border-right-color:  #d7e60e;
            }

            25% {
                border-left-color:  #01132e;
            }

            50% {
                border-top-color:  #67bce4;
            }
            75% {
                border-right-color:  #f51707;
            }
            100% {
                border-bottom-color:  #630521;
            }
        } */


        .btn button {
            position: absolute;
            left: 27%;
            top: 105%;
            display: inline-block;
            margin: 84px 11px 5px -138px;
            padding: 15px 5px 13px 5px;
            width: 20%;
            font-size: 20px;
            border: 2px solid red;
            border-radius: 10px;
            background-color: blanchedalmond;
            cursor: pointer;

        }

        .btn button:hover {
            background-color: rgb(248, 248, 160);
            transform: scale(1.2);
        }

        .btn button a {
            text-decoration: none;
        }

        .container1 {
            border: 2px solid black;
            float: right;
            margin: -795px 20px 48px 35px;
            height: 250px;
            width: 30%;
            text-align: center;
            font-size: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-image: url("men.avif");
            background-repeat: no-repeat;
            background-size: 509px;
            background-position-x: center;
            border-radius: 10px;
            /* border-style: groove; */

            /* box-shadow:1px 2px rgb(206, 200, 200); */
        }

        .container2 {
            border: 2px solid black;
            float: right;
            margin: -514px 20px 48px 35px;
            height: 250px;
            width: 30%;
            text-align: center;
            font-size: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-image: url("women.avif");
            background-repeat: no-repeat;
            background-size: 470px;
            background-position-x: left;
            border-radius: 10px;
            border-style: groove;
        }

        .container3 {
            border: 2px solid black;
            float: right;
            margin: -233px 20px 73px 86px;
            height: 250px;
            padding-left: 1px;
            width: 30%;
            text-align: center;
            font-size: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-image: url("babyfashion.webp");
            background-repeat: no-repeat;
            background-size: 507px;
            border-radius: 10px;
            /* border-style: groove; */
        }

        .container1 a {
            text-decoration: none;
            color: rgb(54, 54, 141);
            animation: transformations 1s infinite;
            
        }

        .container2 a {
            text-decoration: none;
            color: rgb(54, 54, 141);
            animation: transformations 1s infinite;
        }

        .container3 a {
            text-decoration: none;
            color: rgb(54, 54, 141);
            animation: transformations 1s infinite;
        }

        .container1 a:hover,
        .container2 a:hover,
        .container3 a:hover {
            color: grey;


        }

        .container1:hover,
        .container2:hover,
        .container3:hover {

            transform: scale(1.1);
        }

        @keyframes transformations {
            100% {
                color: rgb(49, 23, 2);
                font-size: 45px;
                transform: scale(1.2);
            }
        }

        .delivery img {
            /* border:2px solid black; */
            height: 120px;
            width: 120px;
            position: absolute;
            left: 9%;
            top: 130%;
            margin: -304px 0px 0px 0px;

        }

        hr {
            background-color: black;
            width: 47%;
            margin: -140px 0px 5px 75px;
            position: absolute;
            left: 0%;
            top: 124%;

        }

        .delivery img {

            animation: transformation;
            animation-duration: 5s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;

        }

        .delivery span {
            font-weight: bold;
            position: absolute;
            top: 98%;
            left: 20%;
            animation: blink 1s linear infinite;
        }

        @keyframes blink {
            0% {
                opacity: 0;
                color: rgb(7, 7, 7);
            }

            25% {
                opacity: .5;
                color: rgb(75, 15, 15);
            }

            50% {
                opacity: 1;
                color: rgb(155, 19, 19);
            }

            75% {
                opacity: 1.5;
                color: rgb(228, 50, 50);
            }

            100% {
                opacity: 2;
                color: rgb(240, 108, 108);
            }
        }

        @keyframes transformation {
            0% {
                transform: translateX(500%);
            }

            100% {
                transform: translateX(0%);
            }

        }

        .end {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 90px 34px 5px 613px;
        }

        .fa-heart {
            color: red;
        }

        .number span {
            color: black;
            margin-right: 42px;
            padding-right: 2px;
            margin-left: -35px;
        }

        .timercont {
            /* transform: rotate(-90deg); */
            position: absolute;
            left: 52%;
            top: 30%;
            border: 2px solid black;
            border-radius:10px;
            /* border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%); */
            height: 90%;
            width: 10%;
            margin: -10px 100px 21px 60px;
            color: white;
            /* animation:background1 1s linear infinite; */
            background: linear-gradient(-45deg, #500303,#a8120d, #d13833, #cf650f,#e9ac04, #974c06,#532b05);
            background-size: 400% 400%;
            animation: gradient 5s ease infinite;
        }

        .timercont span {
            font-size: 40px;
            font-weight: bold;
            display: flex;
            justify-content: center;
        }

        .timercont h1 {
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            animation:blink1 5s linear infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
                
            }

            50% {
                background-position: 100% 50%;
                transform: scale(0.9);
            }

            100% {
                background-position: 0% 50%;
                transform: scale(1);
            }
        }
    </style>
</head>
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
        document.getElementById("time").innerHTML = days + "D " + '<br><br>' + hours + "H " + '<br><br>'
            + minutes + "M" + '<br><br>' + seconds + "S " + '<br><br>';

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<body>
    <div class="mid">
        <ul class="top1">
            <li><a href="aboutus.html" id="h11">About Us</a></li>
            <li><a href="FAQ.html" id="h13">FAQ</a></li>
            <li><a href="careers.html" id="h14">Careers</a></li>

            <li><a href="wishlist.php" id="h15"> <i class="fa-solid fa-heart"></i> My Wishlist</a></li>
            <li><a href="#" id="h16">Track your order</a></li>
            <!-- <li ><a href="#" ><img src="12.png" alt=""></a></li> -->
            <hr>
        </ul>
    </div>
    /* <li><a href="#" id="h25">Pages</a></li> */

    <div class="mid1">
        <ul class="top2">
            <li><img src="brand1-removebg-preview.png" alt=""></li>
            <li><a href="Infinity.php" id="h21" class="active">Home</a></li>
            <li><a href="mensfashion.php" id="h22">Men</a></li>
            <li><a href="womenfashion.php" id="h23">Women</a></li>
            <li><a href="baby.html" id="h24">Baby Collection</a></li>

            <li><a href="support.html" id="h27">Contact</a></li>
            <li class="number"><a href="cart.php" id="h30"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            <li><a href="logout.php" id="h28"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>';
            <i class="fa-solid fa-magnifying-glass"></i>
            <li><a href="#" id="h29"><input type="text" name='search' id='search' placeholder="Search this website"></a>
            </li>
        </ul>
    </div>
    <div class="salecontainer">
        <div class="line">
            <marquee>LAST DAY OF SALE Hurry Up! LAST DAY OF SALE Hurry Up! LAST DAY OF SALE Hurry Up!</marquee>
        </div>
        <div class="btn">
            <button><a href="registration.html">Shop Now</a></button>
        </div>
        <div class="delivery">
            <img src="deliveryboy-PhotoRoom.png-PhotoRoom.png" alt="">
            <br>
            <hr>
            <span>
                <h6>FREE &nbsp;DELIVERY</h6>
            </span>
        </div>
        <!-- <div class="fashion">Fashion Sale</div> -->
    </div>
    <div class="timercont">
        <h1>SALE Ends <br>In </h1><br><br>
        <span id="time"></span>
    </div>
    <div class="container1">
        <a href="mensfashion.php"><div><br><br>Men's Fashion</div></a>
    </div>
    <div class="container2">
        <a href="womenfashion.php"><div><br><br>Women's Fashion</div></a>
    </div>
    <div class="container3">
        <a href="baby.html"><div><br><br>Baby's Fashion</div></a>
    </div>
    <script src="main.js"> </script>
    <footer>
        <p class="end">Copyright &copy; www.infinity.com. All rights reserved!</p>
    </footer>
    <script></script>
</body>

</html>