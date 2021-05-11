<?php
$input = $argv[1];
if(!isset($input)) {
    echo("No input.");
    exit();
}
elseif(!is_numeric($input)) {
    echo("Not a number.");
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
        echo("You get ".$hoeveelheidGeldeenheid." of the ".$geldeenheid." euros back." .PHP_EOL);
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
        echo("You get ".$hoeveelheidGeldeenheid." of the ".($geldeenheid * 100)." cents back." .PHP_EOL);
    }
    $nieuwbedrag = $restbedrag - $hoeveelheidGeldeenheid * $geldeenheid;
    $restbedrag = $nieuwbedrag;
}
