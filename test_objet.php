<?php
include './maison.php';
include './vehicule.php';

$LaMaisonette = new Maison("LaMaisonette", 100, 80, 125);

// Calcul et affichage de la surface
echo "<p>La surface de " . $LaMaisonette->getNom() . " est égale à : " . $LaMaisonette->surface() . " m²</p>";


echo "<div style='border-bottom : 3px solid black'></div>";

$mercedes = new Vehicule("Mercedes CLK",4,250);
$honda = new Vehicule("Honda CBR", 2, 200);

$mercedes->detect();
$honda->detect();

$mercedes->boost(50);
$honda->boost(50);
echo "<p>".$mercedes->getVitesse()."</p>";
echo "<p>".$honda->getVitesse()."</p>";


$plusRapide = $mercedes->plusRapide($honda);
if(gettype($plusRapide) == "string"){
    echo $plusRapide;
}else{
    echo $plusRapide->getNom()." est le véhicule le plus rapide !";

    echo "<div style='border-bottom : 3px solid black'></div>";

}