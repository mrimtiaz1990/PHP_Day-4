<?php

// PHP Function Arguments with Strict/Default Value => Identify Function Value/Data inside the function

function Hello(string $lang = "PHP")
{
    echo "I Love  $lang <br>";
}

// PHP Function Arguments with Strict/Default Value
Hello("Java");
Hello(); // Default value will be printed.

?>