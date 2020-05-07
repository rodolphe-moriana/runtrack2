<?php

$intlargeur = (int)$_POST["largeur"];
$inthauteur = (int)$_POST["hauteur"];

$murs="|".str_repeat("&nbsp",($intlargeur*2)-2)."|"."<br>";
$sol="|".str_repeat("_",$intlargeur-1)."|";
$toit=str_repeat("&nbsp",$intlargeur-2)."/"."\\"."<br>";

if($_POST["hauteur"]>=1 && $_POST["largeur"]>=1 && (2*$_POST["hauteur"])==$_POST["largeur"]){

    if($_POST["largeur"]>1){
        echo $toit;
        for($ligne=1;$ligne<$inthauteur;$ligne++){
            echo str_repeat("&nbsp",($intlargeur-$ligne*2)-2)."/".str_repeat("_",$ligne*2)."\\"."<br>";
        }
        echo str_repeat($murs,$inthauteur-1);
        echo $sol;
    }
    else{
        echo $toit;
        echo $sol;
    }
}

else{
    echo "Dimensions incorrectes.";
}

?>