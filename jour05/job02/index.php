<?php

$jour=true;


if ($jour)
{
    function bonjour($jour)
        {
        echo "Bonjour";
        }
}

else 
{
    function bonjour() 
        {
        echo "Bonsoir";
        }
}

bonjour($jour);

?>