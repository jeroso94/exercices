<?php

$v = '43.5 mètres';
echo "Valeur de départ ".$v."<br/>";
if (settype($v,"double")) echo "Conversion DOUBLE ".$v."<br/>";

echo "<br>";
$v = '43.5 mètres';
echo "Valeur de départ ".$v."<br/>";
if (settype($v,"integer")) echo "Conversion INTEGER ".$v."<br/>";

echo "<br>";
$v = '43.5 mètres';
echo "Valeur de départ ".$v."<br/>";
if (settype($v,"string")) echo "Conversion STRING ".$v."<br/>";