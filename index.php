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
