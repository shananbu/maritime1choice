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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Login Page</title>

    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;

        }

        label {
            font-weight: bold;

            width: 100px;
            font-size: 14px;

        }

        .box {
            border: #666666 solid 1px;

        }
    </style>
</head>
<body bgcolor="#FFFFFF">
<div align="center">
    <div style="width:300px; border: solid 1px #333333; " align="left">
        <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
        <div style="margin:30px">
            <form action="" method="post">
                <label>UserName :</label><input type="text" name="username" class="box"/><br/><br/>
                <label>Password :</label><input type="password" name="password" class="box"/><br/><br/>
                <input type="submit" value=" Submit "/><br/>
            </form>
            <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
        </div>
    </div>
</div>

</body>
</html>
