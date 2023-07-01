<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url(https://images.unsplash.com/photo-1683275147274-50526d63bb1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNzh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60) no-repeat;
        background-size: cover;
    }

    .login-box {
        width: 280px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

    .login-box h1 {
        float: left;
        font-size: 40px;
        border-bottom: 6px solid #4caf50;
        margin-bottom: 50px;
        padding: 13px 0;
    }

    .textbox {
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin: 8px 0;
        border-bottom: 1px solid #4caf50;
    }

    .textbox i {
        width: 26px;
        float: left;
        text-align: center;
    }

    .textbox input {
        border: none;
        outline: none;
        background: none;
        color: white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
    }

    .btn {
        width: 100%;
        background: none;
        border: 2px solid #4caf50;
        color: white;
        font-weight: bold;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
    }
</style>

<body>
    <form action="manage.php" method="post">
        <div class="login-box">
            <h1>Admin Login</h1>
            <div class="textbox">
            <i class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="psw" placeholder="Password">
            </div>

            <input type="submit" class="btn" value="LOGIN">
        </div>
    </form>
</body>
<script src="https://kit.fontawesome.com/76f58d0bbc.js" crossorigin="anonymous"></script>
</html>