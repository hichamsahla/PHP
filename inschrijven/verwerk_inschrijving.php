<?php
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mailadres = $_POST['mailadres'];

$dbc = mysqli_connect('localhost' , '12345' , '12345' , '23242_db') or die ('connection error');

$guery = " INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";

$result = mysqli_query($dbc, $guery) or die ('érror query');

mysqli_close($dbc);

if ($result) {
    echo 'Dit is toegevoegd:<br>' ;
    echo $voornaam . '<br>' .$tussenvoegsel . '<br>' .$achternaam .'<br>' . $mailadres;
}
else{
    echo 'soory er is iets fout gegaan';
}