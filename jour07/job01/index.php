<?php

session_start();

if(empty($_SESSION["nbvisites"]) or isset($_POST["reset"])){
    $_SESSION["nbvisites"]=0;
}

$_SESSION["nbvisites"]++;

echo "Nombres visites: ".$_SESSION["nbvisites"];

?>

<br>
<form action="index.php" method="POST" id="form-id">
        <input type="submit" value="Reset" id="button2" name="reset">
</form>