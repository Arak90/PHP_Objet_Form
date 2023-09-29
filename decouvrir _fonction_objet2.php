<?php
 
// D’abord, l’exemple sans chaînage :
$date = new DateTime;
$newDate = $date->modify('+1 day');
 
echo "date : " . $date->format('d/m/Y').PHP_EOL . "<br />";
echo "newDate : " . $newDate->format('d/m/Y').PHP_EOL . "<br />";
 
// Maintenant avec le chaînage. Nous exploitons directement
// l'objet qui nous est retourné sans le stocker dans une variable :
$formatedDate = $date->modify('+1 day')->format('d/m/Y');//on peut enchainer les methodes
echo "formateDate : " . $formatedDate.PHP_EOL . "<br />";


//L'objet date est modifié par la méthode modify() et la méthode format() est appelée sur le même objet.
echo "date : " . $date->format('d/m/Y').PHP_EOL . "<br />";
echo "newDate : " . $newDate->format('d/m/Y').PHP_EOL;