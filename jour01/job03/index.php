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

/* Variables */

$var1 = "txt";
$var2 = true;
$var3 = 2546;
$var4 = 3.141592;

/* HTML */

echo 

"<table>

    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>".gettype($var1)."</td>
        <td>\$var1</td>
        <td>".$var1."</td>
    </tr>
    <tr>
        <td>".gettype($var2)."</td>
        <td>\$var2</td>
        <td>".$var2."</td>
    </tr>
    <tr>
        <td>".gettype($var3)."</td>
        <td>\$var3</td>
        <td>".$var3."</td>
    </tr>
    <tr>
        <td>".gettype($var4)."</td>
        <td>\$var4</td>
        <td>".$var4."</td>
    </tr>
</table>";

?>