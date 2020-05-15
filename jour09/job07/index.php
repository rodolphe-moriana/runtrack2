<?php

$db = mysqli_connect("localhost","root","","jour08");

$request="SELECT SUM(superficie) as superficie_totale FROM `etage`;";
$query=mysqli_query($db,$request);

echo "<table><thead><th>superficie totale</th></thead>";

while($value=mysqli_fetch_assoc($query)){

    echo "<tr><td>".$value["superficie_totale"]."</td></tr>";

}

echo "</tbody></table>";

?>