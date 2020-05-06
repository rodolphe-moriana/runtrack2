<?php

$str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$arr=str_split($str);

foreach($arr as $fils => $value){

    if (!($fils % 2)) {
        continue;
    }
    echo$value[0];
}

?>