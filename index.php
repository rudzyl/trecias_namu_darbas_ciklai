<?php
//nr1
echo '<h4>pirma uzduotis</h4>';
echo '<h5>pirmos uzduoties pirma dalis</h5>';

for($zv = 1; $zv <= 400; $zv++) {
    echo "<span style ='word-wrap: break-word;'>*</span>";
    
}
echo '<br>';

echo '<h5>pirmos uzduoties antra dalis</h5>';
$zv = 1;
while($zv <= 400) {
    echo "*";
    if($zv % 50 == 0) {
        echo "<br>";
    }
    $zv++;
}
echo '<br>';

//nr2
echo '<h4>antra uzduotis</h4>';

$kiekSk = 0;
for($x = 0; $x < 300;$x++) {
    $skaiciai = rand(0, 300);
    if($skaiciai > 275) {
        echo "<h5 style=color:green;>$skaiciai</h5>";
    } else {
        echo ' ' . $skaiciai;
    }
    if($skaiciai > 150) {
        $kiekSk++;
    }
}
echo '<br>';
echo 'Skaiciu didesniu nei 150 yra ' . $kiekSk;

//nr3
echo '<h4>trecia uzduotis</h4>';

$random = rand(3000, 4000);
for ($i = 78; $i < $random; $i++) {
    if($i < $random && $i > ($random - 78) && $i%77 == 0) {
        echo $i;
    }
    else if($i % 77 == 0) {
        echo $i . ', ';
    }
}

//nr4
echo '<h4>ketvirta uzduotis</h4>';

$kvadratas = 1;
while($kvadratas <= 100) {
    echo "<span style='margin:5px;'>*</span>";
    if($kvadratas % 10 == 0) {
        echo "<br>";
    }
    $kvadratas++;
}
echo '<br>';

//nr5
echo '<h4>penkta uzduotis</h4>';

for($i = 1; $i <= 10; $i++) {
    for($j = 1;$j <= 10; $j++) {
        if($i === $j)
            echo "<span style='margin:5px; color:red;'>*</span>";
        else
            echo "<span style='margin:5px;'>*</span>";
    }
    echo '<br>';
}
//nr6
echo '<h4>sesta uzduotis</h4>';
echo '<h5>sestos uzduoties pirma dalis</h5>';

$herbas = 0;
$kartai = 0;
while($herbas < 1) {
    $random = rand(0, 1);
    if($random == 0) {
        $herbas++;
        echo 'H' . '<br>';
        $kartai++;
    } else {
        echo 'S' . '<br>';
        $kartai++;
    }
}
echo 'reikejo ' . $kartai . ' kol iskrito H';

echo '<h5>sestos uzduoties antra dalis</h5>';

$skaiciuojam = 0;
$metimai = 0;
while($skaiciuojam < 3) {
    $random = rand(0, 1);
    if($random == 0) {
        $skaiciuojam++;
        echo 'H' . '<br>';
        $metimai++;
    } else {
        echo 'S' . '<br>';
        $metimai++;
    }
}
echo 'reikejo ' . $metimai . ' kol iskrito H tris kartus';

echo '<h5>sestos uzduoties trecia dalis</h5>';

$herbas = 0;
$metimai = 0;
while($herbas < 3) {
    $moneta = rand(0, 1);
    if($moneta) {
        $herbas++;
        echo 'iskrito H' . '<br>';
        $metimai++;
    } 
    else {
        $herbas = 0;
        echo 'iskrito S' . '<br>';
        $metimai++;
    }
}
echo 'Reikejo ' . $metimai . ' kol iskrito H is eiles';

//nr7
echo '<h4>septinta uzduotis</h4>';

$taskaiKazio = 0;
$taskaiPetro = 0;
$taskai = 0;

while ($taskaiKazio < 222 && $taskaiPetro < 222) {
    $kazys = rand(10, 20);
    $petras = rand(5, 25);
    if($kazys > $petras) {
        echo 'partija laimejo Kazys ' . $kazys . '<br>'; 
        $taskaiKazio += $kazys;
    } else if ($kazys < $petras) {
        echo 'partija laimejo Petras ' . $petras . '<br>';
        $taskaiPetro += $petras;
    }
}
if($taskaiKazio > $taskaiPetro) {
    echo 'laimejo Kazys ' . $taskaiKazio;
} else {
    echo 'laimejo Petras ' . $taskaiPetro;
}
