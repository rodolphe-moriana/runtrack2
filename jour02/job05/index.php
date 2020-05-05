<?php

function Test($y){
    for($x=2;$x<$y;$x++){
        if($y%$x==0){
            return FALSE;
        }
    }
    return TRUE;
}
for($var=2;$var<=1000;$var++){
    if(Test($var)){
        echo $var.'<br>';
    }
}

/* PAS TROUVE COMMENT TEST 0 & 1 */

?>