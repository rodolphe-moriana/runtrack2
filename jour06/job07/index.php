<?php

$tab=array("abc","ghi","def");

function bubblesort($tab,$croissant){
    if($croissant==true){
        sort($tab);
    }

    elseif($croissant==false){
        rsort($tab);
    }

    foreach($tab as $value){
        echo $value."<br>";
    }
}

bubblesort($tab,true);

?>