<?php
$ablakcim = array(
    'cim' => '',
);

$fejlec = array(
    'kepforras' => 'logo.jpg',
    'kepalt' => 'logo',
	'cim' => 'Szakemberkereső',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Készitette: Szebelédi Mariann (C919WN & Klimán László (MS7G8P) '
);
$dbname = 'szebkli';
$dbjelszo = 'jelszo';

$oldalak = array(
	'/' => array('fajl' => 'koszonto', 'szoveg' =>'Köszöntő', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'szakik' => array('fajl' => 'szakik', 'szoveg' => 'Szakik', 'menun' => array(1,1)),
    'Szakiszuro' => array('fajl' => 'szakiszuro', 'szoveg' => 'Szakember kereső', 'menun' => array(0, 0)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'kereses' => array('fajl' => 'kereses', 'szoveg' => 'Keres', 'menun' => array(0,0)),
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = 'images/';
$TIPUSOK = array('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
?>