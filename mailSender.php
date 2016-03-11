<?php
$to = "shananbu@gmail.com";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";

$header = "From:shananbu@gmail.com \r\n";
$header = "Cc:shananbu@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$sentStatus = mail ($to,$subject,$message,$header);

if( $sentStatus == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}
?>