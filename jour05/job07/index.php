<!DOCTYPE html>
<html>
    <head>
        <title>Index Test</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <main>

            <form action="action.php" method="POST" id="form-id">
                <div class="test">
                    <label for="str">Texte :</label>
                </div>
                <div class="test">
                    <input type="text" name="str" placeholder="texte" required>
                </div>
                <div class="test">
                    <label for="liste">liste :</label>
                </div>
                <div class="test">
                <select name="fonction" required>
                        <option disabled selected hidden value="">Choisis</option>
                        <option name="gras">gras</option>
                        <option name="cesar">cesar</option>
                        <option name="plateforme">plateforme</option>
                </select>
                </div>
                <div class="test">
                    <input type="submit" value="Valider" id="button2">
                </div>
            </form>
        </main>

    </body>
</html>