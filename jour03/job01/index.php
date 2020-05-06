<?php

$array = array(
    '200'=>'200 est pair',
    '204'=>'204 est pair',
    '173'=>'173 est impair',
    '98'=>'98 est pair',
    '171'=>'171 est impair',
    '404'=>' 404 est pair',
    '459'=>' 459 est impair',

);

var_dump($array);


foreach( $array as $name => $value )
  echo $value . '<br />';
?>