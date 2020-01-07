<?php
$input = $argv[1];
if(!isset($input)) {
    echo("Je hebt niets ingevoert.");
    exit();
}
elseif(!is_numeric($input)) {
    echo("Dit is geen getal.");
    exit();
}
define("CENT", array(0.50, 0.20, 0.10, 0.05));
define("GELDEENHEDEN", array(50, 20, 10, 5, 2, 1));
$restbedrag = $input;
foreach(GELDEENHEDEN as $geldeenheid) {
    
    if($input == $geldeenheid){
        continue;
    }
    $output = $restbedrag / $geldeenheid;
    $hoeveelheidGeldeenheid = floor($output);
    if($hoeveelheidGeldeenheid != 0) {
        echo("Je krijgt ".$hoeveelheidGeldeenheid." van ".$geldeenheid." euro terug." .PHP_EOL);
    }
    $nieuwbedrag = $restbedrag - $hoeveelheidGeldeenheid * $geldeenheid;
    $restbedrag = $nieuwbedrag;
}
foreach(CENT as $geldeenheid) {
    
    if($input == $geldeenheid){
        continue;
    }
    $output = $restbedrag / $geldeenheid;
    $hoeveelheidGeldeenheid = floor($output);
    if($hoeveelheidGeldeenheid != 0) {
        echo("Je krijgt ".$hoeveelheidGeldeenheid." van ".($geldeenheid * 100)." cent terug." .PHP_EOL);
    }
    $nieuwbedrag = $restbedrag - $hoeveelheidGeldeenheid * $geldeenheid;
    $restbedrag = $nieuwbedrag;
}