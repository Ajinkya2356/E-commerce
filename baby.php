<?php
session_start();
// session_destroy();
include 'header.php';
$_SESSION['baby']=true;
?>
<html>

<head>
    <title>Baby collection</title>
    <script src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>
</head>
<style>
    .navbar {
        height: 10%;
    }

    .baby-collection {
        margin-top: 50px;
        text-align: center;
    }

    .product-cards1,
    .product-cards2,
    .product-cards3 {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: hidden;
        overflow-y: hidden;
        margin: 20px 50px;
        padding: 20px;
        scroll-behavior: smooth;
    }

    .product-card {
        flex: 0 0 250px;
        margin-right: 20px;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;

    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .product-card img {
        width: 80%;
        height: 200px;
        object-fit: contain;
        border-radius: 5px 5px 0 0;
    }
    
    .product-card p {
        margin: 10px;
        font-size: 1.3rem;
        color: black;
        background-color: white;
        font-weight: bold;
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
        top: 95%;
        transform: translateY(-50%);
    }

    .button2 {
        position: absolute;
        right: 5px;
        top: 95%;
        transform: translateY(-50%);
    }

    .button3 {
        position: absolute;
        left: 5px;
        top: 170%;
        transform: translateY(-50%);
    }

    .button4 {
        position: absolute;
        right: 5px;
        top: 170%;
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

    #c {
        width: 30%;
        margin-left: 45px;
    }

    .tag0 {
        font-weight: bold;
        font-size: 30px;
    }

    .tag1 {
        font-weight: bold;
        font-size: 30px;
    }

    .cart1 {
        cursor: pointer;
        font-weight: bold;
        background-color: rgb(27, 159, 192);
        font-size: 20px;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-weight: bold;
        width:50%;
        
       
    }

    .product-card {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    .bt {
        color: red;
        width: 50px;
        margin-right: 190px;
        cursor: pointer;
        border: none;
        height: 30px;
        font-size: 20px;
        background-color: white;
    }
   
    
</style>
<script defer>
    function leftScroll() {
        const left = document.querySelector(".product-cards1");
        left.scrollBy(500, 0);
    }
    function rightScroll() {
        const right = document.querySelector(".product-cards1");
        right.scrollBy(-700, 0);
    }
    function leftscrollo() {
        const left = document.querySelector(".product-cards2");
        left.scrollBy(500, 0);
    }
    function rightscrollo() {
        const right = document.querySelector(".product-cards2");
        right.scrollBy(-500, 0);
    }
    function leftscrollt() {
        const left = document.querySelector(".product-cards3");
        left.scrollBy(500, 0);
    }
    function rightscrollt() {
        const right = document.querySelector(".product-cards3");
        right.scrollBy(-500, 0);
    }
</script>

<body>
    <section class="baby-collection">
        <div class="cover1">
            <button class="left" onclick="leftScroll()"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="product-cards1">
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/81KG3SnfdYL._AC_UL320_.jpg" alt="Product 1">
                        <p><input type="hidden" class="tag0" name="Item_Name" value=" Boys Regular Fit T-Shirt">
                        Boys Regular Fit T-Shirt<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="1009">1009</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img id="c" src="https://m.media-amazon.com/images/I/61lW72RfTZL._AC_UL320_.jpg"
                            alt="Product 2">
                        <p><input type="hidden" class="tag0" name="Item_Name" value=" Boys Joggers Track Pant">
                        <br><br>Boys Joggers Track Pant<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="249">249</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/711MyBB2XhL._AC_UL320_.jpg" alt="Product 3">
                        <p><input type="hidden" class="tag0" name="Item_Name" value=" Puma
Baby Rebound Joy Softfoam Kids Shoes Basketball">
                        Puma
                        Rebound Joy Softfoam Kids Shoes Basketball<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="249">249</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/91e7vvwcYZL._AC_UL320_.jpg" alt="Product 4">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Allen Solly Junior Boys T-Shirt">
                        Allen Solly Junior
                        Boys T-Shirt<br> </input></p>
                       <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/71DjCJ-P52L._AC_UL400_.jpg" alt="Product 5">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Bold N Elegant - Be Bold Inside & Elegant Outside">
                        Bold N Elegant Cotton Bandej Bandhani Little Krishna Kanha Ethnic wear Kurta </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>

                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61OujKa2AL._AC_UL320_.jpg" alt="Product 6">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Analog Multi-Colour Dial Childrens Watch-">
                        Analog Multi-Colour Dial Childrens Watch- </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/81X4Ki8EL8L._AC_UL400_.jpg" alt="Product 7">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Boys Ethnic Wear Pathani Suit for Kids">
                        Boys Ethnic Wear Pathani Suit for Kids </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/71WUpJbUokL._AC_UL400_.jpg" alt="Product 8">
                        <p><input type="hidden" class="tag0" name="Item_Name" value=" Bon Organik">
                        Boys T-Shirt<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61jptSVyNLL._AC_UL320_.jpg" alt="Product 9">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Alan Jones Clothing">
                        Boys Colorblock Tracksuit Set<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/71AFSp9UwdL._AC_UL320_.jpg" alt="Product 10">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="unisex-child Kent V Ps Idp Closed shoe">
                        Bunisex-child Kent V Ps Idp Closed shoe<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/31I1f3RWw1L._AC_UL400_.jpg" alt="Product 11">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Bon Organik">
                        Boy Regular Fit Cotton Joggers<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61R8RyMgTmL._AC_UL400_.jpg" alt="Product 12">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Pista Cotton Printed Casual Wear Lehenga Choli for Girls">
                        Pista Cotton Printed Casual Wear Lehenga Choli for Girls<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
            </div>
            <button class="right" onclick="rightScroll()"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        <div class="cover2">
            <button class="button1" onclick="leftscrollo()"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="product-cards2">
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51ZufCf7fJL._AC_UL320_.jpg" alt="Product 1">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value=" Boys Regular Fit Cotton Blend Track Pant">
                        Boys Regular Fit Cotton Blend Track Pant<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/81f6rru93LL._AC_UL400_.jpg" alt="Product 2">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value=" Boys Regular Fit Cotton T-Shirts (© MARVEL-TSHRT-350, Multi-Colored)">
                        Boys Regular Fit Cotton T-Shirts (© MARVEL-TSHRT-350, Multi-Colored)<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/81dGJBLFSYL._AC_UL320_.jpg" alt="Product 3">
                        <p><input type="hidden" class="tag0" name="Item_Name" value=" Puma">
                        Boys T-Shirt<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/81GJ4D6N2L._AC_UL320_.jpg" alt="Product 4">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value=" Unisex-Child Nrgy Comet V Ps Sneakers">
                        Unisex-Child Nrgy Comet V Ps Sneakers<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/91c17qqLUvL._AC_UL400_.jpg" alt="Product 5">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="United Colors of Benetton">
                        Boys Cotton Hooded Neck Hoodies<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/71MNqAzGnAL._AC_UL320_.jpg" alt="Product 6">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="SUPERMINIS">
                        Unisex-baby's Bootie<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51sx1DqooEL._AC_UL400_.jpg" alt="Product 7">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Boys Regular Fit Track Pant">
                        Boys Regular Fit Track Pant<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61SoHyI6dHL._AC_UL320_.jpg" alt="Product 8">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Unisex-Child St Activate Jr Sneaker">
                        Unisex-Child St Activate Jr Sneaker<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61VUIsYKpeL._AC_UL400_.jpg" alt="Product 9">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Cars Analog Blue Dial Unisex's Watch">
                        Cars Analog Blue Dial Unisex's Watch<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61QG7yixNL._AC_UL400_.jpg" alt="Product 10">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Girls Salwar Suit">
                        Girls Salwar Suit<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/816Z7DtmzNL._AC_UL400_.jpg" alt="Product 11">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Superminis Boys Cotton Side Button Open Kurta with Pocket">
                        Superminis Boys Cotton Side Button Open Kurta with Pocket
                        <br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/91VOcPKyP2L._AC_UL400_.jpg" alt="Product 12">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Amazon Brand - Jam & Honey
                        Boys Lightweight Sweatshirt">
                        Amazon Brand - Jam & Honey
                        Boys Lightweight Sweatshirt
                        <br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="699">699</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
            </div>
            <button class="button2" onclick="rightscrollo()"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        <div class="cover3">
            <button class="button3" onclick="leftscrollt()"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="product-cards3">
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51LU5I4XchL._AC_UL320_.jpg" alt="Product 1">
                        <p><input type="hidden" class="tag0" name="Item_Name" value=" Basket Classic One8 Ps Idp">
                        Basket Classic One8 Ps Idp<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51TXjH1vgL._AC_UL320_.jpg" alt="Product 2">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Kids Unisex-Child Trickster Jr Flip Flops">
                        Kids Unisex-Child Trickster Jr Flip Flops<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61YR5j6eSYL._AC_UL320_.jpg" alt="Product 3">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Digital Grey Dial Kids Watch NLC3001PV03/NNC3001PV03">
                        Digital Grey Dial Kids Watch NLC3001PV03/NNC3001PV03<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51cXHqiTiL._AC_UL320_.jpg" alt="Product 4">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Chu-Chu Black Shoes with Double Strap for Baby Boys & Baby Girls">
                        Chu-Chu Black Shoes with Double Strap for Baby Boys & Baby Girls<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/610eVuymDML._AC_UL320_.jpg" alt="Product 5">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Ferrari X-ray 2 Ac Ps">
                        Ferrari X-ray 2 Ac Ps<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/61Nku9OB1YL._AC_UL320_.jpg" alt="Product 6">
                        <p><input type="hidden" class="tag0" name="Item_Name" value="Flex Jr">
                        Flex Jr<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src="https://m.media-amazon.com/images/I/51TmL0WBqL._AC_UL400_.jpg" alt="Product 7">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Vintage Series Digital Grey Dial Mens Watch-DB-36-1AVDF">
                        Vintage Series Digital Grey Dial Mens Watch-DB-36-1AVDF<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/81wWvHlcrNL._AC_UL320_.jpg" alt="Product 8">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Boys Cotton Blend Hooded Neck Sweatshirt">
                        Boys Cotton Blend Hooded Neck Sweatshirt<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/71XkZJF0HL._AC_UL320_.jpg" alt="Product 9">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Unisex-Child Runner V Ps Idp Closed Shoe">
                        Unisex-Child Runner V Ps Idp Closed Shoe<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/51WSLPj5gnL._AC_UL320_.jpg" alt="Product 10">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Kids Sports Digital Watch, Multi Function Digital Kids Watches">
                        Kids Sports Digital Watch, Multi Function Digital Kids Watches<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/512oe6byIjL._AC_UL400_.jpg" alt="Product 11">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Kids Suit Set Jacquard Floral Assemetric Indo Western Pant">
                        Kids Suit Set Jacquard Floral Assemetric Indo Western Pant<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <div class="product-card">
                    <form action="managecart.php" method="post">
                        <button class="bt" name="wish"><i class="fa-solid fa-heart"></i></button>
                        <img src=" https://m.media-amazon.com/images/I/81IinBs-mfL._AC_UL400_.jpg" alt="Product 12">
                        <p><input type="hidden" class="tag0" name="Item_Name"
                            value="Baby Boys Double Color Stripe Winter Traditional Cotton Ethn">
                        Baby Boys Double Color Stripe Winter Traditional Cotton Ethn<br> </input></p>
                        <p>Rs.<input type="hidden" class="tag1" name="Price" value="199">199</input></p>
                        <button class="cart1" name="mycart1">Add to cart</button>
                    </form>
                </div>
                <button class="button4" onclick="rightscrollt()"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
    </section>

</body>

</html>