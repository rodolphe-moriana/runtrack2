<!-- Style -->

<style>

td,th{
    border: black solid 1px;
}

table{
    border-collapse: collapse;
}
</style>

<?php

$str="On n est pas le meilleur quand on le croit mais quand on le sait";

$voy=array("a","e","i","o","u","y","A","E","I","O","U","Y");
$cons=array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Z");
$space=array(" ");

$array1=str_split($str);

$consonnes=array_diff($array1,$voy,$space);

$voyelles=array_diff($array1,$cons,$space);

echo " <table>
        <thead>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </thead>
        <tbody>
            <td>".count($consonnes)."</td>
            <td>".count($voyelles)."</td>
        </tbody>
       </table>";

?>