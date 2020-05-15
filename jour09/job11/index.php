<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT AVG(capacite) as capacite_moyenne FROM `salles`;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>capacité moyenne :</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["capacite_moyenne"]."</td></tr>";

}

echo "</tbody></table>";

?>