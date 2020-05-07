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

        <h1 style="font-size:1em">Les champs doivent être > 0. La largeur doit faire 2x la hauteur.</h1>
            <form action="action.php" method="POST" id="form-id">
                <div class="test">
                    <label for="largeur">Largeur :</label>
                </div>
                <div class="test">
                    <input type="text" name="largeur" placeholder="largeur" required>
                </div>
                <div class="test">
                    <label for="hauteur">Hauteur :</label>
                </div>
                <div class="test">
                    <input type="text" name="hauteur" placeholder="hauteur" required>
                </div>
                <div class="test">
                    <input type="submit" value="Valider" id="button2">
                </div>
            </form>
        </main>

        <footer>

        </footer>

    </body>
</html>