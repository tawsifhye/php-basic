<?php
//current date
echo date('y-m-d h:i:s') . '<br>';

//print yesterday
echo date('y-m-d h:i:s', time() - 60 * 60 * 24) . '<br>';

echo date('F j Y, H:i:s') . '<br>';

$dateString = 'July 21 2022 10:44:30';

$parsedDate = date_parse_from_format('F j Y', $dateString);

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

echo '<br>';

echo $parsedDate["year"];
