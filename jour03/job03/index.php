<?php

$str= "I'm sorry Dave I'm afraid I can't do that";
$cons= array("b","m","f","s","r","d","D","v","t","h","n","'");

$voy=str_replace($cons,"", $str);

echo$voy;

?>