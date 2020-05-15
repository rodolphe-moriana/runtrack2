<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT COUNT(*) as nb_etudiants FROM `etudiants`;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>nombre total étudiants</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["nb_etudiants"]."</td></tr>";

}

echo "</tbody></table>";

?>