<?php
//while loop(kol tiesa), kai nezinom kiek reiks laiko sukt, data base
//
$x = 1;
/*
while($x <= 5) {
    echo "hi there<br>";
    $x++;
}
*/
//do wile loop, visada viena karta isspausdint, net jei while false
//
do {
    echo "hi there<br>";
    $x++;
}
while($x <= 5);

// for loop, zinom kiek kartu suksim
for($y = 1; $y <= 10; $y++) {
    echo "hi<br>";
}

//foreach loop, for array's galima su stringais is pradziu explode

$array = ["Danielius", "Jane", "jacob"];

foreach($array as $loopData) {
    echo "My name is" . $loopData . "<br>";
}

?>