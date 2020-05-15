<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-01-01';";
$query=mysqli_query($db,$request);

echo "<table><thead><th>prénoms</th><th>nom</th><th>naissance</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["prenom"]."</td>";
    echo "<td>".$value["nom"]."</td>";
    echo "<td>".$value["naissance"]."</td></tr>";
}

echo "</tbody></table>";

?>