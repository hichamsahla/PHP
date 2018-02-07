<?php
$mailadres = $_POST['mailadres'];

$host = 'localhost';
$username = '12345';
$password = '12345';
$dbname = '23242_db';

$dbc = mysqli_connect($host,$username,$password,$dbname) or die('error connecting');

$query = "SELECT * FROM nieuwsbrief WHERE mailadres ='$mailadres'";

$result = mysqli_query($dbc,$query) or die ('error querying uitschrijven');

$number_of_rows = mysqli_num_rows($result) or die ('error rows.');

if ($number_of_rows == 0) {
    echo 'helaas';
    exit();
}

$query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";

$result = mysqli_query($dbc,$query) or die ('Error querying 2');

mysqli_close($dbc);
?>