<?php
session_start();
$showError = true;
$server = "localhost";
$username = "root";
$password = "";
$database = "Infinity";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = false;
    $Email = $_POST["Email"];
    $sql = "Select * from registration where Email='$Email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        $_SESSION['Email'] = $Email;
    } else {
        echo '<script>alert("User not registered");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>
</head>
<style>
    .container {
        position: absolute;
        top: 20%;
        left: 35%;
        max-width: 500px;
        height:500px;
        padding: 30px;
        border:none;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
    }

    h1 {
        text-align: center;
        position: absolute;
        left: 28%;
        top: 27%;
    }

    h6 a {
        text-decoration: underline;
    }

    .form-group a {
        float: right;
        color: rgb(8, 70, 243);
        text-decoration: underline;
        font-weight: bold;
    }
    
    input {
        border: none;
        border-bottom:  solid 1px rgba(0,0,0,.1); 
        width: 350px;
        padding:10px 0px;
        transition:  all .3s linear; 
        margin-left:15px;
        &:focus {
            border-bottom:  solid 1px black;
            outline: 0;
            box-shadow: 0 2px 6px -8px rgba(black, .45);
        }
    }
    button {
        position: absolute;
        left: 10%;
        top: 80%;
        border: none;
        border-radius: 20px;
        width: 75%;
        background-color: rgb(27, 159, 192);
        height: 40px;
        color: white;
        cursor: pointer;
    }
    button:hover{
        background-color:rgb(119, 191, 209) ;
    }
    #Email{
        margin-top:220px;
    }
    .fa-mobile-screen{
        position:absolute;
        top:8%;
        left:45%;
        font-size:70px;
    }
    .fa-comment-sms{
        position:absolute;
        top:4%;
        left:54%;
        font-size:40px;
    }
</style>


<body>
    
    <form action="OTP.php" method="post">
        <div class="container">
        <i class="fa-solid fa-mobile-screen"></i>
        <i class="fa-sharp fa-solid fa-comment-sms"></i>
        <h1>Verification</h1>
            <div class="label1">
                <i class="fa-solid fa-envelope"></i><input type="email" id="Email" name="Email" placeholder=" Username"
                    autocomplete="off">
            </div>
            <div class="button">
                <button type="submit">Send OTP</button>
            </div>
        </div>
        <?php
        if ($login == true) {
            header('location: verify.php');
        }
        ?>
    </form>
    <!-- <form action="OTP.php" method="post">
        <div class="container">
            <div class="form-column">
                <div class="form-group col-md-10">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Send OTP</button>
        </div>
        
    </form> -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</html>