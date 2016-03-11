<?php
$mysql_hostname = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "maritime1stchoice";
$conn = new PDO('mysql:host='.$mysql_hostname . ';dbname='.$mysql_database . ';charset=utf8', $mysql_user, $mysql_password);
$iCon = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
?>

<?php
/*$mysql_hostname = "127.0.0.1";
$mysql_user = "bringo_maritime";
$mysql_password = "root!123";
$mysql_database = "bringo_maritime1stchoice";
$conn = new PDO('mysql:host='.$mysql_hostname . ';dbname='.$mysql_database . ';charset=utf8', $mysql_user, $mysql_password);
$iCon = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);*/
?>