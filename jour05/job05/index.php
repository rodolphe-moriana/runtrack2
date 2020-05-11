<?php

function occurrences($str,$char){
    $resultat=substr_count($str,$char);
    return $resultat;
}

echo occurrences("La villa des anges saison 18 c'est mardi que ca commence","a");

?>