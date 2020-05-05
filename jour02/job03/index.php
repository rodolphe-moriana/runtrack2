<?php

for($var=0;$var<=100;$var++){

    if($var>=0 and $var<=20){
        echo "<i>";
    }

    if($var>=25 and $var<=50 and $var!==42){
        echo "<u>";
    }

    if($var==42){
        echo "La Plateforme_"."<br>";
    }

    else{
        echo $var."<br></i></u>";
    }
}

?>