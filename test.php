<?php
$dizi = ['elma', 'armut', 'muz', 'kivi','','',NULL];

function bosluksil($dizi){
    return ($dizi != '' && $dizi != NULL);
}

function yenidizi($dizi){
    return array_filter($dizi, 'bosluksil');
}

$yeniDizi = array_map('yenidizi', [$dizi]);

$random = array_rand($yeniDizi[0],2);

print_r($random);

?>

