<?php

for($var=0;$var<=100;$var++){

    if($var%3==0 and $var%5==0){
        echo "FizzBuzz"."<br>";
    }

    elseif($var%3==0){
        echo "Fizz"."<br>";
    }

    elseif($var%5==0){
        echo "Buzz"."<br>";
    }

    else{
        echo $var."<br>";
    }
}

?>