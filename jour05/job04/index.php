<?php

$a=5;
$operation="*";
$b=9;

function calcule($a,$b,$operation){

    if($b==0 and ($operation=="/" or $operation=="%")){
        $resultat="Division par 0 impossible.";
    }

    elseif($operation=="*"){
        $resultat=$a*$b;
    }
    elseif($operation=="/"){
        $resultat=$a/$b;
    }
    elseif($operation=="+"){
        $resultat=$a+$b;
    }
    elseif($operation=="-"){
        $resultat=$a-$b;
    }
    elseif($operation=="%"){
        $resultat=$a%$b;
    }
    return $resultat;
}

echo calcule($a,$b,$operation);

?>