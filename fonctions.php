<?php
$phrase = 'je suis une phrase pour l\'exemple';
echo '<p>' . $phrase . '</p>';
$nombreCaracteres = strlen($phrase);
echo '<p>' . $nombreCaracteres . '</p>';
$anagrame = str_shuffle($phrase);
echo '<p>' . $anagrame . '</p>';
?>
