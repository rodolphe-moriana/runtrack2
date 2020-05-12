<style>

<?php
    $fonction=$_POST["fonction"];

    function inc($inc){
        if($inc=="bleu"){
            include('css/style1.css');
        }
        elseif($inc=="rouge"){
            include('css/style2.css');
        }
        elseif($inc=="vert"){
            include('css/style3.css');
        }

        else{
            include('css/style.css');
        }
    }

    inc($fonction);
?>

</style>

<!DOCTYPE html>
<html>

<head>
    <title> Formulaire d'ajout d'Objet </title>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Indie+Flower&family=Montserrat&family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
</head>

<body>

    <header>
        <h1 id="titre2">Formulaire d'ajout d'objet à la liste de naissance</h1>
    </header>

    <main>
        <form action="index.php" method="POST" id="first">
            <div class="centre">
                <label for="nom"><span class="red">*&nbsp;</span>Intitulé :</label>
            </div>
            <div class="centre">
                <input type="text" id="nom" placeholder="Intitulé du produit affiché" required>
            </div>
            <div class="centre">
                <label for="imgup"><span class="red">*&nbsp;</span>Image :</label>
            </div>
            <div class="centre">
                <input type="file" id="imgup" accept="image/x-png,image/gif,image/jpeg" required>
            </div>
            <div class="centre">
                <label for="lien"><span class="red">*&nbsp;</span>Lien :</label>
            </div>
            <div class="centre">
                <input type="url" id="lien" placeholder="Lien d'achat du produit affiché" required>
            </div>
            <div class="centre">
                <label for="desc"><span class="red">*&nbsp;</span>Description :</label>
            </div>
            <div class="centre">
                <textarea id="desc" rows="4" cols="50" placeholder="Description du produit affiché" required></textarea>
            </div>
            <div class="centre">
                <select name="fonction" required>
                        <option disabled selected hidden value="">Choisis</option>
                        <option name="bleu">bleu</option>
                        <option name="rouge">rouge</option>
                        <option name="vert">vert</option>
                </select>
            </div>
            <div class="centre">
                <input type="submit" value="Ajouter l'objet" id="button2">
            </div>
        </form>
    </main>

    <footer>

    </footer>

</body>