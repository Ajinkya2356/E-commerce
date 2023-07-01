<?php
session_start();
// session_destroy();
$_SESSION['women'] = true;
include 'header.php';
?>
<html>

<head>
    <title>Womens_Fashion</title>
</head>
<script src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>
<style>
    body {
        max-width: 3000px;
    }

    .container,
    .container1,
    .container2 {
        display: grid;
        grid-gap: 0.9rem;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 0.7fr;
        margin-top: 30px;
        overflow-x: hidden;
        overflow-y: hidden;
        margin-left: 50px;
        margin-right: 50px;
        scroll-behavior: smooth;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .item {
        border: 1px solid #f5f5f5;
        height: 400px;
        width: 200px;
        font-size: 20px;
        background-color: white;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    .item img {
        height: 200px;
        padding-left: 35px;
        /* background-color: rgb(204, 198, 198); */
    }

    h1 {
        display: flex;
        /* justify-content: center;
            align-items: center; */
    }

    .tag2 {
        background-color: white;
        font-size: 15px;
    }

    .tag1 {
        background-color: rgb(241, 226, 226);
        padding-top: 5px;
        font-weight: bold;
        font-size: 30px;
    }

    .tag0 {
        background-color: rgb(241, 226, 226);
        padding-top: 10px;
    }

    .item .tag0 a {
        text-decoration: none;
        color: rgb(12, 12, 12);
        /* font-weight:bold; */
    }

    .item:hover {
        transform: scale(1.09);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .item a:hover {
        color: rgb(182, 0, 3);
    }

    .left {
        position: absolute;
        left: 5px;
        top: 30%;
        transform: translateY(-50%);
    }

    .right {
        position: absolute;
        right: 5px;
        top: 30%;
        transform: translateY(-50%);
    }

    .button1 {
        position: absolute;
        left: 5px;
        top: 85%;
        transform: translateY(-50%);
    }

    .button2 {
        position: absolute;
        right: 5px;
        top: 85%;
        transform: translateY(-50%);
    }

    .button3 {
        position: absolute;
        left: 5px;
        top: 150%;
        transform: translateY(-50%);
    }

    .button4 {
        position: absolute;
        right: 5px;
        top: 150%;
        transform: translateY(-50%);
    }

    .button2,
    .button4,
    .right,
    .button1,
    .button3,
    .left {
        background: white;
        height: 70px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border: none;
    }

    .button2:hover,
    .button4:hover,
    .right:hover,
    .button1:hover,
    .button3:hover,
    .left:hover {
        background-color: rgb(224, 219, 219);
    }

    .navbar {
        height: 10%;
        /* border:2px solid black; */
        background-color: rgb(68 67 67);

    }

    .navbar-nav {
        display: inline-block;
        list-style: none;
        margin: 3px;
        width: 50%;
        text-decoration: none;
    }

    .navbar img {
        position: absolute;
        left: 15px;

    }

    .form-inline {
        position: absolute;
        top: 4%;
        left: 20%;
        width: 100%;

    }

    img {
        background-color: white;
    }

    .form-inline input {
        width: 800px;
        height: 30px;
    }

    .cart {
        float: right;
        position: absolute;
        right: 15%;
        top: 4.1%;
        size: 50px;
    }

    .cart a {
        height: 100px;
    }

    li {
        list-style: none;
        text-decoration: none;


    }

    li a {
        color: white;
        font-weight: bold;
        font-size: 20px;
    }

    li .home {
        position: absolute;
        top: 4%;
        left: 9%;
        text-decoration: none;
    }

    li .sign1 {
        position: absolute;
        top: 4%;
        left: 15%;
        text-decoration: none;
        cursor: pointer;
    }

    .cart a {
        text-decoration: none;
        color: black;
        font-size: 20px;
        padding-bottom: 15px;
    }

    #image1 {
        height: 100px;
        position: absolute;
        left: 10px;
        top: 0;
    }

    #item8 img {
        margin-left: -30px;
    }

    .item .bt {
        color: red;
        width: 50px;
        margin-top: -1px;
        margin-bottom: 0px;
        cursor: pointer;
        border: none;
        height: 30px;
        font-size: 20px;
        background-color: white;

    }

    .item .cart1 {
        cursor: pointer;
        font-weight: bold;
        background-color: rgb(27, 159, 192);
        font-size: 20px;
        color: white;
        border:none;
        border-radius: 10px;
    }

    .item .cart1 {
        cursor: pointer;
        font-weight: bold;
    }
    #item12 img{
       margin-left:0px;
       margin-right:50px;
        width:67%;
    }
</style>
<script defer>
    function leftScroll() {
        const left = document.querySelector(".container");
        left.scrollBy(500, 0);
    }
    function rightScroll() {
        const right = document.querySelector(".container");
        right.scrollBy(-700, 0);
    }
    function leftscrollo() {
        const left = document.querySelector(".container1");
        left.scrollBy(500, 0);
    }
    function rightscrollo() {
        const right = document.querySelector(".container1");
        right.scrollBy(-500, 0);
    }
    function leftscrollt() {
        const left = document.querySelector(".container2");
        left.scrollBy(500, 0);
    }
    function rightscrollt() {
        const right = document.querySelector(".container2");
        right.scrollBy(-500, 0);
    }
</script>

<body>

    <div class="cover">
        <button class="left" onclick="leftScroll()"><i class="fa fa-arrow-left"></i></button>
        <div class="container">
            <div class="item" id="item1">
                <form action="managecart.php" method="post">
                <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71iiyTWa-GL._MCnd_AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="PRETTYGARDEN Floral Summer Dress">
                    PRETTYGARDEN Floral Summer Dress<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="99">99</input>
                    <div class="tag2">Save 6%</div>
                    
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>

                </form>
            </div>
            <div class="item" id="item2">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71Baq7E2tML._MCnd_AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Amoretu Women Summer <br>Tunic Dress">
                    Amoretu
                    Women Summer <br>Tunic Dress<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="40.78">40.78</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item3">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81Puqs2zylL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Calvin Klein Unlined Novelty Chemtech Tote">Calvin Klein Unlined Novelty Chemtech Tote
                    <br>
                    </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="123.00">123.00</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item4">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61WBKX53s5L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Jessica Simpson Fit Crop Jean <br>Jacket"><br>Jessica Simpson Fit Crop Jean <br>Jacket
                    <br>
                    </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="79.50">79.50</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item5">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81YkqwL-PlL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Calvin Klein Mallory Nylon <br>Branding Tote">Calvin Klein Mallory Nylon <br>Branding
                    Tote
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="174.53">174.53</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Prime Try Before You Buy</div><button class="cart1" name="mycart1">Add to
                        cart</button>
                </form>
            </div>
            <div class="item" id="item6">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/91-ZgnE3v5L._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Joe's Jeans Women's Antic Jacket with leather finishing"><br> Joe's
                    Jeans Women's Antic Jacket with leather finishing<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="158.00">158.00</input>

                    <div class="tag2"> Rs.12.60 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <!-- Row 2 -->
            <div class="item" id="item7">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61Ke+s8MvjL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Everest 1002TB Stylish Tablet Tote Bag, Coral">Everest 1002TB
                    Stylish Tablet Tote Bag, Coral <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="17.48">17.48</input>

                    <div class="tag2">Rs.19.38 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item8">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71YdzknhXrL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Dokotoo Womens Long Sleeve Hollow Cable">Dokotoo Womens Long Sleeve Hollow Cable <br>
                    </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="37.99">37.99</input>

                    <div class="tag2">Rs.17.43 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item9">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81tVn7xIpdL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="J.Crew <br>Mercantile Women's Garment-Dyed Denim Jacket"> J.Crew Mercantile Women's
                    Garment-Dyed Denim Jacket<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="76.34">76.34</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item10">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81o0B6kXCRL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="Jag Jeans Women's Rupert Denim Jacket">
                    <br>Jag Jeans Women's Rupert Denim Jacket </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="83.64">83.64</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item11">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61+F2AviWGL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="Women's Canvas Retro Casual Handbags">Women's
                    Canvas Retro Casual Handbags <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="23.98">23.98</input>

                    <div class="tag2">Save Rs.5.00</div>
                    <div class="tag2">Prime Try Before You Buy</div><button class="cart1" name="mycart1">Add to
                        cart</button>
                </form>
            </div>
            <div class="item" id="item12">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSZHH0xVf-VOx11y4OwuJvFEZACjNeZi6oiMWwSjYjoRH4A9SOD4qowuiyhXUJ6FkqYT0bEB3QUi_kI6iLbOqE-bDfL6VgE2-r3GmZzR6I&usqp=CAE"
                        alt=""><input type="hidden" class="tag0" name="Item_Name"
                        value="Gucci 0036S 002 Black Category 3 Size 54mm<br>(black)"> Gucci 0036S 002 Black Category 3
                    Size 54mm<br>(black)<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="292.50">292.50</input>

                    <div class="tag2">List: Rs.775.00</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>

        </div>
        <button class="right" onclick="rightScroll()"><i class="fa fa-arrow-right"></i></button>
    </div>
    <div class="cover1">
        <button class="button1" onclick="leftscrollo()"><i class="fa fa-arrow-left"></i></button>
        <div class="container1">
            <div class="item" id="item13">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61ocmRfLe7L._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Women's Button Down Shirt Classic Long Sleeve Collared"> <br>Women's Button Down Shirt
                    Classic Long Sleeve Collared</input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="26.99">26.99</input>


                    <div class="tag2">Rs.20.96 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61PInAJA6GL._AC_UL320_.jpg"
                        alt="Network Interruption"><input type="hidden" class="tag0" name="Item_Name"
                        value="Verdusa Women's Neck Slim Fitted Long Sleeve Pullovers ">Verdusa Women's Neck Slim Fitted
                    Long Sleeve Pullovers <br>
                    </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="21.99">21.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item15">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/51Q-9t61AfL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Gloria Vanderbilt Women's Classic Amanda High Rise"><br>Gloria Vanderbilt Women's Classic
                    Amanda High Rise <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="64.40">64.40</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item16">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81RpfLbq8gL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Fossil Women's Rachel Tote Purse Handbag">Fossil Women's Rachel Tote Purse Handbag <br>
                    </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="289.99">289.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Only 11 left in stock - order soon.</div>
            </div>
            <div class="item" id="item17">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61uQwx9le8L._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Lee Women's Flex Motion Regular Fit Trouser Pant"><br>Lee Women's Flex Motion Regular Fit
                    Trouser Pant <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="69.97">69.97</input>

                    <div class="tag2">List: Rs.59.95</div>
                    <div class="tag2">Prime Try Before You Buy</div><button class="cart1" name="mycart1">Add to
                        cart</button>
                </form>
            </div>
            <div class="item" id="item18">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61TtV4KEOrL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="Briggs New York Women's Super Stretch pants">
                    <br>Briggs New York Women's Super Stretch pants<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="23.11 ">23.11 </input>

                    <div class="tag2">Rs.16.15 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <!-- Row 4 -->
            <div class="item" id="item19">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61v1ZYMJUHL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Amazhiyu Women Cropped Sweatshirt Long Sleeves">Amazhiyu Women Cropped Sweatshirt Long
                    Sleeves <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="24.99">24.99</input>

                    <div class="tag2">List: Rs.50.00</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item20">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71V4hQ8OwkL._AC_UY218_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="ArcEnCiel Canvas Shoulder Handbag for Women">
                    ArcEnCiel Canvas Shoulder Handbag for Women<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="16.99">16.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item21">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71164516OWL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="Democracy Women's Ab Solution Jegging">
                    Democracy Women's Ab Solution Jegging<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="78.00">78.00</input>

                    <div class="tag2">Save 5%</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item22">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61W0N4nCP2L._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Global Blank Cropped Fleece Pullover Women's Sweatshirt"> <br>Global Blank Cropped Fleece
                    Pullover Women's Sweatshirt </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="32.99">32.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item23">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/617cG+vaa+L._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="MAGICMK Woman’s Sweater"> MAGICMK Woman’s
                    Sweater<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="23.99">23.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Prime Try Before You Buy</div><button class="cart1" name="mycart1">Add to
                        cart</button>
                </form>
            </div>
            <div class="item" id="item24">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71NnNzXGTjL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Democracy Women's Ab Solution Itty Bitty Boot"> Democracy Women's Ab Solution Itty Bitty
                    Boot<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="49.50">49.50</input>

                    <div class="tag2">Rs.15.98 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
        </div>
        <button class="button2" onclick="rightscrollo()"><i class="fa fa-arrow-right"></i></button>
    </div>
    <div class="cover2">
        <button class="button3" onclick="leftscrollt()"><i class="fa fa-arrow-left"></i></button>
        <div class="container2">
            <!-- Row 5 -->
            <div class="item" id="item25">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/51LGRTqjj5L._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Trendy Queen Womens Half Zip Cropped Sweatshirts"> Trendy Queen Womens Half Zip Cropped
                    Sweatshirts<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="42.99">42.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item26">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTUsM6LSUzF3GMgAFauN8QRrnoLlm5GfXJ_szFtbfAqIwAkZrfe_ORM_lTJvBl6iFMp1uRfcTBW9y_ViZb92yECjsvwzDl7vQoehdlv8Lch&usqp=CAE"
                        alt=""><input type="hidden" class="tag0" name="Item_Name"
                        value="Gucci Sunglasses for Women (model no=s003-6)">Gucci Sunglasses for Women (model
                    no=s003-6) <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="24.99">24.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item27">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/A1nYj6JK-DL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Carhartt Women's Benson Denim Jacket ">Carhartt Women's Benson Denim Jacket <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="59.99">59.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item28">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/51vOmUkLFrS._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="KUNMI Womens High Waist Lifting Skinny Jeans"><br>KUNMI Womens High Waist Lifting Skinny
                    Jeans <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="36.99">36.99</input>


                    <div class="tag2">Rs.10.75 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item29">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81CTmCxvVWL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name" value="[BLANKNYC] Women's Denim Frayed Jacket"><br>
                    [BLANKNYC] Women's Denim Frayed Jacket<br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="79.38">79.38</input>

                    <div class="tag2"></div>
                    <div class="tag2">Prime Try Before You Buy</div><button class="cart1" name="mycart1">Add to
                        cart</button>
                </form>
            </div>
            <div class="item" id="item30">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71tOqSpSShL._MCnd_AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Simple Flavor Women's Floral Vintage 3/4 Sleeves"><br>Simple Flavor Women's Floral
                    Vintage 3/4 Sleeves <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="33.99">33.99</input>

                    <div class="tag2">Rs.17.67 delivery</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <!-- Row 6 -->
            <div class="item" id="item31">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/51rdCJ4D3iL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="PRETTYGARDEN Women Outfits Long Palazzo Pants">PRETTYGARDEN Women Outfits Long Palazzo
                    Pants <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="40.99">40.99</input>
                    <div class="tag2">Save 10%</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <div class="item" id="item32">
                <form action="managecart.php" method="post">
                    <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61pMxLdgdpL._AC_UL320_.jpg" alt=""><input
                        type="hidden" class="tag0" name="Item_Name"
                        value="Ckikiou Womens Lightweight Oversized Neck Sweaters">Ckikiou Womens Lightweight Oversized
                    Neck Sweaters <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="27.99">27.99</input>

                    <div class="tag2">Save 5%</div>
                    <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                </form>
            </div>
            <form action="managecart.php" method="post">
                <div class="item" id="item33">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/8182Z6J74XL._AC_UL320_.jpg" alt=""><input
                            type="hidden" class="tag0" name="Item_Name"
                            value="MJ SERECA Women's Burnout Velvet Kimono Long Cardigan"><br> MJ SERECA Women's Burnout
                        Velvet Kimono Long Cardigan<br> </input>
                        Rs.<input type="hidden" class="tag1" name="Price" value="39.99">39.99</input>

                        <div class="tag2">Rs.16.52 delivery</div>
                        <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="item" id="item34">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/713IoszZmAL._AC_UL320_.jpg" alt=""><input
                            type="hidden" class="tag0" name="Item_Name"
                            value="POGTMM Women 3/4 Sleeve Jacket Work Office Blazer"> POGTMM Women 3/4 Sleeve Jacket
                        Work Office Blazer<br> </input>
                        Rs.<input type="hidden" class="tag1" name="Price" value="28.95">28.95</input>

                        <div class="tag2">Rs.16.52 delivery</div>
                        <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="item" id="item35">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/616uOH4F9HL._AC_UL320_.jpg" alt=""><input
                            type="hidden" class="tag0" name="Item_Name"
                            value="Haellun Womens Casual Winter Hooded Sweatshirt">Haellun Womens Casual Winter Hooded
                        Sweatshirt <br> </input>
                        Rs.<input type="hidden" class="tag1" name="Price" value="39.96">39.96</input>

                        <div class="tag2">Rs.16.52 delivery</div>
                        <div class="tag2">Prime Try Before You Buy</div><button class="cart1" name="mycart1">Add to
                            cart</button>
                    </form>
                </div>
                <div class="item" id="item36">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid  fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51LAwXgg5jL._AC_UL320_.jpg" alt=""><input
                            type="hidden" class="tag0" name="Item_Name"
                            value="Tapata Women's 28''/30''/32''/34'' Dress Pants"><br>Tapata Women's
                        28''/30''/32''/34'' Dress Pants <br> </input>
                        Rs.<input type="hidden" class="tag1" name="Price" value="44.99">44.99</input>
                        <div class="tag2">Save 5%</div>
                        <div class="tag2">Ships to India</div><button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
        </div>
        <button class="button4" onclick="rightscrollt()"><i class="fa fa-arrow-right"></i></button>
    </div>
</body>

</html>