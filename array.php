<?php 
$moi = array('nom' => 'Jasseny', 'prénom' => 'Thibaud', 'age' => 31, 'adresse' => 'Rue de la soif');

foreach ($moi as $label => $valeur)
{
    echo '<p>Votre ' . $label . '  est ' . $valeur . '!</p>';
}
?>


    <?php
// Fonctions permettant de faire des recherche da,s les tableaux afin de vérifié certaine chose.
$coordonnees = array (

    'prenom' => 'François',

    'nom' => 'Dupont',

    'adresse' => '3 Rue du Paradis',

    'ville' => 'Marseille');


if (array_key_exists('nom', $coordonnees))

{

    echo 'La clé "nom" se trouve dans les coordonnées !';

}


if (array_key_exists('pays', $coordonnees))

{

    echo 'La clé "pays" se trouve dans les coordonnées !';

}


?>

<?php

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');


if (in_array('Myrtille', $fruits))

{

    echo 'La valeur "Myrtille" se trouve dans les fruits !';

}


if (in_array('Cerise', $fruits))

{

    echo 'La valeur "Cerise" se trouve dans les fruits !';

}

?>

<?php

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');


$position = array_search('Fraise', $fruits);

echo '"Fraise" se trouve en position ' . $position . '<br />';


$position = array_search('Banane', $fruits);

echo '"Banane" se trouve en position ' . $position;

?>