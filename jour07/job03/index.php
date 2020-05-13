<?php

session_start();

if(isset($_POST["prenom"])){
    echo "Prénoms : ";
    $_SESSION[$_POST["prenom"]] = $_POST["prenom"];
    foreach($_SESSION as $value){
        echo $value."<br>";
        }
}

elseif(isset($_POST["reset"])){
    session_destroy();
}

?>

<br>
<table>
    <form action="index.php" method="POST">
        <label for="prenom">Texte :</label>
        <input type="text" name="prenom" placeholder="texte" required>
        <input type="submit" value="Valider" id="button2" name="valider">
    </form>
        
    <form action="index.php" method="POST">
    <input type="submit" value="Reset" id="button2" name="reset">
    </form>
</table>