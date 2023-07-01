<?php
session_start();
// session_destroy();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['loggedin']) == true) {
    if (isset($_POST['mycart1'])) {
        if (isset($_SESSION['cart'])) {
            $my_Items = array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST["Item_Name"], $my_Items)) {
                if (isset($_SESSION['Men']) == true) {
                    echo '<script>alert("Item already added");
                window.location.href="http://localhost/pbl2/project/mensfashion.php";</script>';
                } else if (isset($_SESSION['women']) == true) {
                    echo '<script>alert("Item already added");
                    window.location.href="http://localhost/pbl2/project/womenfashion.php";</script>';
                } else if (isset($_SESSION['baby']) == true) {
                    echo '<script>alert("Item already added");
                    window.location.href="http://localhost/pbl2/project/baby.php";</script>';
                }

            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
                if (isset($_SESSION['Men']) == true) {
                    echo '<script>alert("Item added");
            window.location.href="http://localhost/pbl2/project/mensfashion.php";</script>';
                } else if (isset($_SESSION['women']) == true) {
                    echo '<script>alert("Item added");
            window.location.href="http://localhost/pbl2/project/womenfashion.php";</script>';
                }
                else if (isset($_SESSION['baby']) == true) {
                    echo '<script>alert("Item added");
            window.location.href="http://localhost/pbl2/project/baby.php";</script>';
                }
            }
        } else {
            $_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            if (isset($_SESSION['Men']) == true) {
                echo '<script>alert("Item added");
        window.location.href="http://localhost/pbl2/project/mensfashion.php";</script>';
            } else if (isset($_SESSION['women']) == true) {
                echo '<script>alert("Item added");
        window.location.href="http://localhost/pbl2/project/womenfashion.php";</script>';
            } else if (isset($_SESSION['baby']) == true) {
                echo '<script>alert("Item added");
                window.location.href="http://localhost/pbl2/project/baby.php";</script>';
            }
        }
    }
    if (isset($_POST['wish'])) {
        if (isset($_SESSION['wishlist'])) {
            $my_Items = array_column($_SESSION['wishlist'], 'Item_Name');
            if (in_array($_POST["Item_Name"], $my_Items)) {
                echo '<script>alert("Already added to wishlist");
                window.location.href="http://localhost/pbl2/project/mensfashion.php";</script>';
            } else {
                $count = count($_SESSION['wishlist']);
                $_SESSION['wishlist'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price']);
                echo '<script>alert("Added to wishlist");
            window.location.href="http://localhost/pbl2/project/mensfashion.php";</script>';
            }
        } else {
            $_SESSION['wishlist'][0] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price']);
            echo '<script>alert("Added to wishlist");
        window.location.href="http://localhost/pbl2/project/mensfashion.php";</script>';
        }

    }
    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo '<script>alert("Item removed");
                    window.location.href="cart.php";</script>';
            }
            if (empty($_SESSION["cart"]))
                unset($_SESSION["cart"]);
        }
    }
    if (isset($_POST['cost'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                $_SESSION['cart'][$key]['Quantity'] = $_POST['cost'];

                echo '<script>
                    window.location.href="cart.php";</script>';

            }
        }
    }

} else {
    if (isset($_SESSION['Men']) == true) {
        echo '<script>alert("Sign in first");
            window.location.href="mensfashion.php";</script>';
    } else if (isset($_SESSION['women']) == true) {
        echo '<script>alert("Sign in first");
            window.location.href="womenfashion.php";</script>';
    }
    else if (isset($_SESSION['baby']) == true) {
        echo '<script>alert("Sign in first");
            window.location.href="baby.php";</script>';
    }

}

?>