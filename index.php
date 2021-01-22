<?php

//Exercice 1
$zero = 0;
while($zero < 10){
    echo $zero . "<br>";
    $zero++;
}

echo "<br><br>";

//Exerice 2
$nombre0 = 0;
$nombre1 = 4;
while($nombre0 <= 20){
    $nombre0 *= $nombre1;
    echo $nombre0. "<br>";
    $nombre0++;
}

/*//Exercice 3
$nombre100 = 100;
$nombre13 = 13;
while($nombre100 > 10){
    $nombre100 *= $nombre13;
    echo $nombre100. "<br>";
    $nombre100--;
}*/

//Exercice 4
$nombreUn = 1;
while($nombreUn < 10){
    echo $nombreUn. "<br>";
    $nombre100 += 0.5;
}

//Exercice 5
for($i = 1; $i <= 15; $i++){
    echo "On y arrive presque.";
}

//Exercice 6
for($i = 20; $i >= 0; $i--){
    echo "C'est presque bon.";
}

//Exercice 7
for($i = 1; $i <= 100; $i += 15){
    echo "On tient le bon bout.";
}

//Exercice 8
for($i = 200; $i >= 0; $i -= 12){
    echo "Enfin !!!!";
}
