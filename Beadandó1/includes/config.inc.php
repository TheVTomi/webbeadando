<?php
$ablakcim = array(
    'cim' => 'TisztaVerda',
);

$fejlec = array(
    'kepforras' => 'aktuális.jpg',
    'kepalt' => 'logo',
	'cim' => '',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y"),
    'ceg' => 'Tisztaverda Kft.'
);

$oldalak = array(
	'/' => array('fajl' => 'kezdolap', 'szoveg' => 'Kezdőlap', 'menun' => array(1,1)),
    'áraink' => array('fajl' => 'araink', 'szoveg' => 'Áraink', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>