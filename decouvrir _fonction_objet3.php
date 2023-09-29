<?php
 
$date = new DateTimeImmutable;
$newDate = $date->modify('+1 day');
 
echo $date->format('d/m/Y').PHP_EOL;
echo $newDate->format('d/m/Y').PHP_EOL;