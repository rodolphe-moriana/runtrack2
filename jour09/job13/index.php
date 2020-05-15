<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT etage.nom as nom_etage,salles.nom as nom_salles FROM etage INNER JOIN salles ON salles.id_etage = etage.id;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>noms etages</th><th>noms salles</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["nom_etage"]."</td>";
    echo "<td>".$value["nom_salles"]."</td></tr>";
}

echo "</tbody></table>";

?>