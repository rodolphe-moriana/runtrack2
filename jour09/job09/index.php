<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT * FROM `salles` ORDER BY capacite desc;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>nom</th><th>id_etage</th><th>capacite</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["nom"]."</td>";
    echo "<td>".$value["id_etage"]."</td>";
    echo "<td>".$value["capacite"]."</td></tr>";
}

echo "</tbody></table>";

?>