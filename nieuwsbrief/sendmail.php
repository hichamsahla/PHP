<?php
mysqli_connect('localhost','hicham', 'hicham', '23242_db');

$to = '23242@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'from: ' . $_POST['from'];

mail($to,$subject,$message,$headers);

echo 'uw mail is verstuurd. Bedankt!';

