<?php

$str=$_POST["str"];
$fonction=$_POST["fonction"];
$decalage=3;

 function gras($str){
    $resultat="";
    $test=explode(" ",$str);

        foreach($test as $mot){
            if(ctype_upper(substr($mot,0,1))){
                $resultat.="<b>".$mot."</b> ";
            }

            else{
                $resultat.=$mot." ";
            }
        }
        return $resultat;
}

function cesar($str,$decalage){

    $resultat="";
    
        $test2=str_split($str,1);
        foreach($test2 as $modif){
            if(($modif>="A" and $modif<="Z") or ($modif>="a" and $modif<="z")){
                $nc=ord($modif)+$decalage;
                if($nc>122){
                    $nc = $nc-26;
                }
                $resultat.=chr($nc);
            }

            elseif($modif==" "){
                $resultat.=" ";
            }

        }
        return $resultat;
    }

function plateforme($str){

    $str=str_replace("me ","me_ ",$str);
    $str=str_replace("me.","me_.",$str);
    $str=str_replace("me,","me_,",$str);
    $str=str_replace("me!","me_!",$str);

    return $str;
}

    if($fonction=="gras"){
        echo gras($str);
    }

    elseif($fonction=="cesar"){
        echo cesar($str,$decalage);
    }

    elseif($fonction=="plateforme"){
        echo plateforme($str);
    }
?>