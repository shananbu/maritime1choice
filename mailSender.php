<?php
$to = "shananbu@gmail.com";
$subject = "Enquiry from ".addslashes($_POST['personName']);

$message = "Hi,<br>";
$message .= addslashes($_POST['comments']);
$message .= "<br>Regards,";
$message .= "<br>".addslashes($_POST['personName']);

$header = "From:shananbu@gmail.com \r\n";
$header = "Cc:".addslashes($_POST['personEmail'])."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$sentStatus = mail ($to,$subject,$message,$header);

if( $sentStatus == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}
?>