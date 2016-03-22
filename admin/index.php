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
        header_remove("location");
        header("location:adminHome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
    //   $conn->close();
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


<form class="form_li" action="" method="post">
    <section class="admin_login">
        <div class="log_admin">
            <h1>
                <img src="../images/logo.png">
            </h1>

            <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            <ul>
                <li>
                    <label>Username</label>
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" class="box"/>
                </li>
                <li>
                    <label>password</label>
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" name="password" class="box"/>
                </li>
                <li class="de_log_btn">

                    <input type="submit" value=" Submit "/>
                </li>
            </ul>

        </div>
    </section>
</form>
</body>
</html>

