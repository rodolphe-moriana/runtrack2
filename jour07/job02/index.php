<?php

if(isset($_POST["reset"])){
    $_COOKIE["nbvisites"]=1;
    setcookie("nbvisites",$_COOKIE["nbvisites"]);
    echo "Nombres visites: ". $_COOKIE["nbvisites"];
}

else{
    $_COOKIE["nbvisites"]++;
    setcookie("nbvisites", $_COOKIE["nbvisites"]);
    echo "Nombres visites: ". $_COOKIE["nbvisites"];
}

?>

<br>
<form action="index.php" method="POST" id="form-id">
        <input type="submit" value="Reset" id="button2" name="reset">
</form>