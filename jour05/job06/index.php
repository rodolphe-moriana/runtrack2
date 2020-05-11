<?php

function leetspeak($str){

    $arr=array("A"=>"4","B"=>"8","E"=>"3","G"=>"6","L"=>"1","S"=>"5","T"=>"7");
    
    foreach($arr as $search=>$value){
        $str=str_ireplace($search,$value,$str);
    }
    return $str;
}

echo leetspeak("La villa des anges saison 18 c'est mardi que ca commence");

?>