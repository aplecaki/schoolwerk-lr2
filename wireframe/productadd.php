<?php

$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "leerstuff";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$soortleer = $_POST['soortleer'];
$gelooid = $_POST['gelooid'];
$gewicht = $_POST['gewicht'];
$dikte = $_POST['dikte'];
$kleur = $_POST['kleur'];

echo "Soort leer: " . $soortleer . "<br>";
echo "Gelooid: " . $gelooid . "<br>";
echo "Gewicht: " . $gewicht . "<br>";
echo "Dikte: " . $dikte . "<br>";
echo "Kleur: " . $kleur . "<br>";

$conn->close();

?>
``