<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT * FROM salles;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>nom</th><th>capacité</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["nom"]."</td>";
    echo "<td>".$value["capacite"]."</td></tr>";
}

echo "</tbody></table>";

?>