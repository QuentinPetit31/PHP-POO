<?php
function testPositifNegatif($nombre) {
    if ($nombre > 0) {
        echo "$nombre est un nombre positif." ;
    } elseif ($nombre < 0) {
        echo "$nombre est un nombre négatif.";
    } else {
        echo "<br> $nombre est égal à zéro.";
    }
}
testPositifNegatif(0); 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function retourneLePlusGrand($nombre1, $nombre2, $nombre3) :void {
    if ($nombre1 > $nombre2 && $nombre1 > $nombre3) {
        echo "<br> $nombre1 est le plus grand nombre" ;
    } elseif ($nombre2 > $nombre3 && $nombre3 >  $nombre1) {
        echo "<br> $nombre2 est le plus grand nombre" ;
} elseif ($nombre3 > $nombre1 && $nombre3 >  $nombre2) {
    echo "<br> $nombre3 est le plus grand nombre" ;
}
}
retourneLePlusGrand(13, 11, 12);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    function categorieAge(int $age) {

        switch ($age) {
            case $age>=12:
                echo "cadet";
                break;
            case $age>=10:
                echo "Minime";
                break;
            case $age>=8:
                echo "Pupille";
                break;
            case $age>=6:
                echo "Poussin";
                break;
            default:
                echo "Trop jeune";
                break;
        }
    }


echo "<br>Fonction categorieAge<br>";
categorieAge(5);
categorieAge(6);
categorieAge(7);
categorieAge(8);
categorieAge(9);
categorieAge(10);
categorieAge(11);
categorieAge(12);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function grandeValeur(array $tab){
    $max = $tab[0];
    $index = 0;    

    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] > $max) {
            $max = $tab[$i];
            $index = $i;
        }
    }

    echo "<br>La valeur la plus grande est $max et se trouve à la colonne $index.<br>";

}

$tab = [10,22,58,89,11,6,148,10,47,28,21,4,2,158,189,2,14];
grandeValeur($tab);


function moyenneValeur(array $tab): void {
    $somme = 0;
    $count = 0;
    
    foreach ($tab as $val) {
        $somme += $val;
        $count++;
    }

    $moyenne = $somme / $count;

    echo "<br>La moyenne des valeurs du tableau est $moyenne.<br>";
}

moyenneValeur($tab);


