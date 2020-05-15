<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT SUM(capacite) as capacite_totale FROM `salles`;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>capacité totale :</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["capacite_totale"]."</td></tr>";

}

echo "</tbody></table>";

?>