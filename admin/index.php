<?php
include("config.php");
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form
    $myusername = addslashes($_POST['username']);
    $mypassword = addslashes($_POST['password']);

    $sql = "SELECT count(id) cnt FROM AdminLogin WHERE userName='$myusername' and password='$mypassword'";
    $query = $conn->query($sql);
    $result = $query->fetch();
    $count = $result["cnt"];

// If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        session_start();
        $_SESSION['login_user'] = $myusername;
        header("location:adminHome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <!-- Bootstrap -->
    <link href="css/admin.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
    <![endif]-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>

<header class="navbar-fixed-top top_header ful_row">
    <div class="logo"> <img src="../images/logo.png"></div>
    <h1>Maritime1stChoice.com's Admin </h1>
</header>
<section id="wrapper">
    <section class="main_info">
        <div class="login_box">
            <form class = "form_li" action="" method="post">
                <label>UserName :</label><input type="text" name="username" class="box"/><br/><br/>
                <label>Password :</label><input type="password" name="password" class="box"/><br/><br/>
                <input type="submit" value=" Submit "/><br/>
            </form>
        </div>
    </section>
</section>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>

