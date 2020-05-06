<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$array=str_split($str);

for($i=0;$i<strlen($str)-2;$i++){

    $j=$i+1;
    echo $array[$j];
}

echo $array[0];

?>