<html>

<head>

</head>
<style>
    #image1 {
        height: 100px;
        position: absolute;
        left: 10px;
        top: 0;
    }

    .navbar {
        height: 12%;
        /* border:2px solid black; */
        background-color:rgb(68 67 67);

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
        background-color: transparent;
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
        color: white;
        font-size: 20px;
        padding-bottom: 15px;
    }
    input{
        border:none;
        border-radius:10px;
    }
    #c{
        color:white;
    }
</style>
<script defer src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>

<body>

    <nav class="navbar">
        <img id="image1" src="brand1-removebg-preview.png" alt=""></img>
        <ul>
            <?php
            if (isset($_SESSION['loggedin']) == true) {
                echo "<li><a class='home' href='home3.php'>Home</a></li>";
            } else {
                echo '<li><a class="home" href="home3.php">Home</a></li>';
            }
            ?>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " type="search" placeholder="Search for products" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <?php
        $count = 0;
        if (isset($_SESSION['cart'])) {
            $count = count($_SESSION['cart']);
        }
        ?>
        <div class="cart">
            <a id="c"href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span>&nbsp;
                    <?php echo $count ?>
                </span></a>
        </div>
    </nav>
</body>

</html>