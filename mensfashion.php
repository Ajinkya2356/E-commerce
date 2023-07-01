<?php
session_start();
// session_destroy();
$_SESSION['Men'] = true;
include 'header.php';
?>
<html>

<head>
    <title>Mens_Fashion</title>
</head>
<script defer src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>
<style>
    body {
        height: 70vh;
    }

    .container,
    .container2,
    .container3 {
        display: grid;
        grid-gap: 0.7rem;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        margin-top: 30px;
        overflow-x: hidden;
        overflow-y: hidden;
        scroll-behavior: smooth;
        margin-left: 50px;
        margin-right: 50px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .item {
        border: 2px solid #f5f5f5;
        height: 380px;
        font-size: 20px;
        background-color: white;
        

    }

    .item img {
        height: 200px;
        padding-left: 35px;
        margin-top: 15px;
        /* background-color: rgb(204, 198, 198); */
    }

    h1 {
        display: flex;
        flex-wrap: nowrap;
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
        text-decoration: none;
    }

    .item .tag0 a {
        text-decoration: none;
        color: rgb(12, 12, 12);
        /* font-weight:bold; */
    }

    /* .item:hover {
        transform: scale(1.09);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    } */

    .item a:hover {
        color: rgb(182, 140, 3);
    }

    .cover {
        padding: 0px 30px;
        position: relative;
    }

    .left {
        position: absolute;
        left: 0;
        top: 19%;
        transform: translateY(-50%);
    }

    .right {
        position: absolute;
        right: 0;
        top: 19%;
        transform: translateY(-50%);
    }

    .container,
    .container2,
    .container3::-webkit-scrollbar {
        -webkit-appearance: none;
    }

    #item3 {
        width: 100%;
        margin-right: 10px;
    }

    #item6 {
        width: 97%;
        margin-right: 37px;
    }

    #item7 {
        width: 97%;
        margin-left: 1px;
        margin-right: 20px;
    }

    #item8 {
        width: 97%;
        margin-right: 10px;
    }

    #item15 {
        width: 94%;
        margin-right: 55px;
    }

    .left {
        position: absolute;
        left:4px;
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
        background: antiquewhite;
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

    .fa-cart-plus {
        float: right;
        margin-right: 5px;
        font-size: 25px;
        margin-top: -15px;
        color: black;
        background-color: white;
        ;
    }

    .number {
        display: block;
        float: right;
    }

    #image1 {
        height: 100px;
        position: absolute;
        left: 10px;
        top: 0;
    }

    .navbar {
        height: 12%;
        /* border:2px solid black; */
        background-color: rgb(68 67 67);

    }

    .navbar-nav {
        display: inline-block;
        list-style: none;
        margin: 5px;
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

    .btn {
        cursor: pointer;
    }

    .item button {
        width: 200px;
        margin-top: 15px;
    }

    li {
        list-style: none;
        text-decoration: none;


    }

    li a {
        color: black;
        font-weight: bold;
        font-size: 20px;
    }

    li .home {
        color:white;
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

    .item .bt {
        color: red;
        width: 50px;
        margin-top: -1px;
        margin-bottom: 0px;
        /* cursor: pointer; */
        border: none;
        height: 30px;
        font-size: 20px;
        background-color: white;

    }

    .item .cart1 {
        cursor: pointer;
        font-weight: bold;
        background-color: rgb(27, 159, 192) ;
        font-size: 20px;
        color:white;
        border:none;
        border-radius: 10px;
    }

    /* #heart {
        color: grey;
    } */

    #heart.red {
        color: red;
    }

    .item .cart1 {
        cursor: pointer;
        font-weight: bold;
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
    function scrolll() {
        const left = document.querySelector(".container2");
        left.scrollBy(700, 0);
    }
    function scrollr() {
        const right = document.querySelector(".container2");
        right.scrollBy(-700, 0);
    }
    function lescroll() {
        const left = document.querySelector(".container3");
        left.scrollBy(800, 0);
    }
    function riscroll() {
        const right = document.querySelector(".container3");
        right.scrollBy(-800, 0);
    }
    

</script>

<body>
    <div class="cover">
        <button class="left" onclick="leftScroll()"><i class="fa-solid fa-arrow-left"></i></button>
        <div class="container">
            <form action="managecart.php" method="post">

                <div class="item" id="item1">

                    <button class="bt" name="wish"id="color" onclick="ret()"><i class="fa-solid fa-heart"id="heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71w7x5SUXyL._AC_UX569_.jpg" alt="">

                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Youth Hooded Sweatshirt, Style G18500B">Youth
                    Hooded Sweatshirt, Style G18500B <br>
                    </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="14">14</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>

                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item2">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/514weKQX7vL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="True Classic Premium 
                Mens T-Shirts Size S to XXXL">True Classic Premium <br>
                    Mens T-Shirts Size S to XXXL<br></a></input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="109.99">109.99</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item3">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://imagescdn.reebok.in/img/app/product/7/798728-9406215.jpg?auto=format" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="adidas Mens tapered track pants for versatile wear"><br>adidas Mens tapered<br>
                    track pants for versatile wear <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="34.89">34.89</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>

                </div>
            </form>

            <form action="managecart.php" method="post">

                <div class="item" id="item4">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81oTmSS7J3L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="COOFANDY Mens Casual with Shirt Short Sleeves">COOFANDY Mens Casual with Shirt
                    Short Sleeves
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="29.99">29.99</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item5">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81lMgmOkSXL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Timberland Mens White Ledge Waterproof">
                    Timberland Mens White Ledge Waterproof
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="136.88">136.88</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Prime Try Before You Buy </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item6">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQdLwPJPnJCEhUXJT4MqRVYL7IJa-oFcxbdoyV3Eqy7-BntJte4MyHlR3QWm3OlKRzSkPqjj2IuHsg6d0424lmH4lchPf7MBeiuxMVINz4&usqp=CAE"
                        alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Invicta Mens Pro Diver Stainless Steel Quartz Watch"><br>Invicta Mens Pro
                    Diver <br>Stainless Steel Quartz <br>Watch
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="68.00">68.00</input>
                    <div class="tag2">Was: Rs.80.00 Rs.12.60 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <!-- Row 2 -->
            <form action="managecart.php" method="post">
                <div class="item" id="item7">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71692cHM14L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Mens Hoodie,Smart Fleece Zip-Front Hooded">Mens Hoodie,Smart Fleece Zip-Front Hooded
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="18.00">18.00</input>
                    <div class="tag2">Rs.16.55 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item8">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61Y8pQkviDL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Fruit of the Loom Eversoft Sweatpants with Pockets"><br>Fruit of the Loom Eversoft
                    Sweatpants with Pockets
                    <br></a></input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="11.99">11.99</input>

                    <div class="tag2">Rs.17.43 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item9">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61s56LFS5oL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Nike Mens Cut Socks (6 Pack) (shoe size 8-12), White Socks">Nike Mens Cut
                    Socks (6 Pack) (shoe size 8-12),<br> White Socks
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="27.00">27.00</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item10">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71Wo3bx8K-L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Cooper & Nelson Mens Suit, 3 Piece Suits for Men,<br> with formal
                    pants">Cooper & Nelson Mens Suit, 3 Piece Suits for Men,<br> with formal
                    pants
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="94.99">94.99</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item11">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71NZl070rtL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="INTO THE AM Mens Short Sleeve S - 4XL Tshirt">INTO THE AM Mens Short Sleeve S -
                    4XL Tshirt
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="49.95">49.95</input>

                    <div class="tag2">Save Rs.5.00</div>
                    <div class="tag2">Only 5 left </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item12">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/712Bekl0s6L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Citizen Mens Promaster Eco-Drive Aviator Watch">Citizen Mens Promaster
                    Eco-Drive Aviator Watch
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="525">525</input>
                    <div class="tag2">List: Rs.775.00</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
        </div>

        <button class="right" onclick="rightScroll()"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
    <div class="cover2">
        <button class="button1" onclick="scrolll()"><i class="fa-solid fa-arrow-left"></i></button>
        <div class="container2">
            <form action="managecart.php" method="post">
                <div class="item" id="item13">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71fyw1U54GL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="EcoSmart Cotton-Blend,Sweatshirt for Men">EcoSmart Cotton-Blend,Sweatshirt for Men
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="14.00">14.00</input>

                    <div class="tag2">Rs.20.96 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item14">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71b5NQZQYKL._AC_UL320_.jpg"
                        alt="Network Interruption">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="ON Mens Cloud Sneakers Shoes Size 12,<br> Color: Black">ON Mens Cloud
                    Sneakers Shoes Size 12,<br> Color: Black
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="176.99">176.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item15">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRvzet0EPJgG3rRvf2vrgH8jaOePGAYMu5fpuFwk7tbqK1tMcQFYSJIXJV4CuIKK_v_O1aXBC0isC1IHDYYBsTNdBElIHuC0g-8ED3T9DnK&usqp=CAE"
                        alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Plain Mens Pants Slim Fit Skinny Suit Pants
                    pants for versatile wear"><br>Plain Mens Pants Slim Fit Skinny Suit Pants
                    pants for versatile wear <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="32.99">32.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item16">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/51kyjYuOZhL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Garmin Venu,smartwatch with <br>Touchscreen Display">Garmin Venu,smartwatch with
                    <br>Touchscreen Display
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="216.79">216.79</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Only 11 left in stock </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item17">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81gHzitlpsL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="5 Pack Mens Active Quick Dry Crew Neck T Shirts">5 Pack Mens Active Quick Dry
                    Crew Neck T Shirts
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="39.95">39.95</input>
                    <div class="tag2">List: Rs.59.95</div>
                    <div class="tag2">Only 2 left in stock </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item18">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71GCRwlYsLL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Gildan Adult Fleece Crewneck Sweatshirt <br>G18000">Gildan Adult Fleece Crewneck
                    Sweatshirt <br>G18000
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="11.95">11.95</input>

                    <div class="tag2">Rs.16.15 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <!-- Row 4 -->
            <form action="managecart.php" method="post">
                <div class="item" id="item19">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81+O6GnEKyL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="4 Pack: Mens Dry-Fit Long Sleeve <br>T-Shirt">4 Pack: Mens Dry-Fit Long Sleeve
                    <br>T-Shirt
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="33.99">33.99</input>

                    <div class="tag2">List: Rs.50.00</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item20">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61cn-miWbKL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="G-Shock Mens GBD200 Square Case Watch Black"><br>G-Shock Mens GBD200 Square Case
                    Watch Black
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="148.99">148.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item21">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71uHw9NnCYL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="FitVille Extra Wide <br>Premium Walking Shoes for Men">FitVille Extra Wide
                    <br>Premium Walking Shoes for Men
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="68.90 ">68.90 </input>
                    <div class="tag2">Save 5%</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item22">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71Gtzq2yqnL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Fossil Gen6 Smartwatch with Alexa">Fossil
                    Gen6 Smartwatch with Alexa
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="249.99">249.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item23">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71GkSvFZQ5L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Hanes Mens Sweatshirt, Hoodie<br>(black)">
                    Hanes Mens Sweatshirt, Hoodie<br>(black)
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="37.26">37.26</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">Save up to 5%</div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item24">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/814rpp-AYUL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Wrangler Authentics Mens Classic Cargo Stretch Short">Wrangler Authentics Mens
                    Classic Cargo Stretch Short
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="52.99">52.99</input>
                    <div class="tag2">Rs.12.60 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
        </div>
        <button class="button2" onclick="scrollr()"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
    <div class="cover3">
        <button class="button3" onclick="lescroll()"><i class="fa-solid fa-arrow-left"></i></button>
        <div class="container3">
            <!-- Row 5 -->
            <form action="managecart.php" method="post">
                <div class="item" id="item25">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61EPU2GVTjL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="Carhartt Mens
                    Full-Zip Sweatshirt">Carhartt Mens
                    <br>Full-Zip<br> Sweatshirt
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="58.99">58.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item26">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/711wUm1wyES._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="FRACORA Mens White Sneakers
                    Low Top Lace Up Casual Shoes">FRACORA Mens White Sneakers
                    Low Top Lace Up Casual Shoes
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="24.99">24.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item27">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/51rkKPruYvL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="J.Ver Mens Dress Shirts
                    Solid Long Sleeve Stretch">J.Ver Mens Dress Shirts
                    Solid Long Sleeve Stretch
                    <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="22.99">22.99</input>
                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item28">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/91tK8GlvU7L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Timex Ironman Classic 30 Full-Size 38mm Watch">Timex Ironman Classic 30 Full-Size
                    38mm Watch <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="30.52">30.52</input>

                    <div class="tag2">Rs.10.75 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item29">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/817EpDqsL-L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="adidas mens Athletic Cushioned Crew Socks (6-pair) ">adidas mens Athletic
                    Cushioned Crew Socks (6-pair) <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="11.42">11.42</input>

                    <div class="tag2">Save up to 5%</div>
                    <div class="tag2">Prime Try Before You Buy </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item30">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/81BxDTZXTGL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Mens V-Neck Sweater (Available in Big & Tall)">Mens V-Neck Sweater (Available
                    in Big & Tall) <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="19.30">19.30</input>

                    <div class="tag2">Rs.17.67 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <!-- Row 6 -->
            <form action="managecart.php" method="post">
                <div class="item" id="item31">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/91xFlskZBYL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name" value="COOFANDY Mens Sleeveless Sweater">
                    COOFANDY Mens Sleeveless Sweater <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="20.87">20.87</input>

                    <div class="tag2">Rs.16.52 delivery<br>Save 12%</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item32">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71W6POrFT0L._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="COOFANDY Mens V Neck Knitted Button Cardigan Vest">COOFANDY Mens V Neck Knitted
                    Button Cardigan Vest <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="25.99">25.99</input>

                    <div class="tag2">Save 12%</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item33">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61r7bCI-dLL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Citizen Mens Watch Black Dial (Model: CB5908-57E)">Citizen Mens Watch Black
                    Dial (Model: CB5908-57E) <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="490">490</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item34">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/61ViQ1SLzaL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="COSIDRAM Men Casual Shoes Flats <br>Sneakers for Male">COSIDRAM Men Casual Shoes
                    Flats <br>Sneakers for Male <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="42.99">42.99</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item35">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/71XXRwqp+XL._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="Carhartt Mens Loose Fit Heavyweight Short-Sleeve">Carhartt Mens Loose Fit
                    Heavyweight Short-Sleeve <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="46.92">46.92</input>

                    <div class="tag2">Rs.16.52 delivery</div>
                    <div class="tag2">save up to 20% </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
            <form action="managecart.php" method="post">
                <div class="item" id="item36">
                    <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                    <img src="https://m.media-amazon.com/images/I/610oC4Ir0IS._AC_UL320_.jpg" alt="">
                    <input type="hidden" class="tag0" name="Item_Name"
                        value="PUMA Mens Essentials Big Logo Full Zip Hoodie">
                    PUMA Mens Essentials Big Logo Full Zip Hoodie <br> </input>
                    Rs.<input type="hidden" class="tag1" name="Price" value="17.50">17.50</input>

                    <div class="tag2">Rs.12.60 delivery</div>
                    <div class="tag2"> </div>
                    <button class="cart1" name="mycart1">Add to cart</button>
                </div>
            </form>
        </div>
        <button class="button4" onclick="riscroll()"><i class="fa-solid fa-arrow-right"></button>
    </div>
    <!-- <script src="main.js"> </script> -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>