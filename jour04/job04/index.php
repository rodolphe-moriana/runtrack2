<!DOCTYPE html>
<html>
    <head>
        <title>Index Test</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="form.css">
    </head>

    <body>
        
        <header>

        </header>

        <main>
            <form action="action.php" method="POST" id="form-id">
                <div class="test">
                    <label for="nom">Nom :</label>
                </div>
                <div class="test">
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                <div class="test">
                    <label for="prenom">Prénom :</label>
                </div>
                <div class="test">
                    <input type="text" name="prenom" placeholder="Prenom" required>
                </div>
                <div class="test">
                    <label for="age">Age</label>
                </div>
                <div class="test">
                    <input type="text" name="age" placeholder="Age" required>
                </div>
                <div class="test">
                    <input type="submit" value="Ajouter l'objet" id="button2">
                </div>
            </form>
        </main>

        <footer>

        </footer>

    </body>
</html>