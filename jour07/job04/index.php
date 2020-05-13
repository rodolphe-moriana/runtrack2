<?php

if(isset($_POST["deco"])){
    setcookie('prenom',null,-1);
    ?>
    <br>
    <table>
    <form action="index.php" method="POST">
        <label for="prenom">Texte :</label>
        <input type="text" name="prenom" placeholder="texte" required>
        <input type="submit" value="connexion" name="connexion">
    </form>
    </table>
    <?php
}

else{

if(isset($_POST["prenom"]) or isset($_COOKIE["prenom"])){

setcookie("prenom",$_POST["prenom"]);
echo "Bonjour ".$_POST["prenom"];

?>
    <form action="index.php" method="POST">
    <input type="submit" value="deco" name="deco">
    </form>
<?php
}
else{?>
    <br>
    <table>
    <form action="index.php" method="POST">
        <label for="prenom">Texte :</label>
        <input type="text" name="prenom" placeholder="texte" required>
        <input type="submit" value="connexion" name="connexion">
    </form>
    </table>
<?php
    }

} 

?>

