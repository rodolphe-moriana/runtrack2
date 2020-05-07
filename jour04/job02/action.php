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


echo   "<table>
            <thead>
                <th>Arguments</th>
                <th>Valeur</th>
            </thead>
            <tbody>";

foreach($_GET as $key => $value){
    echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
}

echo "</tbody></table>";

?>