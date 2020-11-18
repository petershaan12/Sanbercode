<?php 
require_once("animal.php");
require_once("frog.php");
require_once("Ape.php");

$sheep = new Animal("shaun");

echo "Nama Hewan : $sheep->name <br>"; // "shaun"
echo "Jumlah Kaki : $sheep->legs <br>"; // 2
echo "Suhu Tubuh : $sheep->cold_blooded <br>"; // false
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Nama Hewan : $kodok->name <br>"; // "shaun"
echo "Jumlah Kaki : $kodok->legs <br>"; // 2
echo "Suhu Tubuh : $kodok->cold_blooded <br>"; // false
echo $kodok->jump() ; // "hop hop"
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Nama Hewan : $sungokong->name <br>"; // "shaun"
echo "Jumlah Kaki : $sungokong->legs <br>"; // 2
echo "Suhu Tubuh : $sungokong->cold_blooded <br>"; // false
$sungokong->yell(); // "Auooo"

?>