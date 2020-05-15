<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT * FROM `etudiants` WHERE naissance>'2002-05-14';";
$query=mysqli_query($db,$request);

echo "<table><thead><th>prénoms</th><th>nom</th><th>naissance</th><th>sexe</th><th>email</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["prenom"]."</td>";
    echo "<td>".$value["nom"]."</td>";
    echo "<td>".$value["naissance"]."</td>";
    echo "<td>".$value["sexe"]."</td>";
    echo "<td>".$value["email"]."</td></tr>";
}

echo "</tbody></table>";

?>