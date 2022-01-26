<?php

// PHP Function Arguments => Mention in Function that  Need a Value/Data inside the function

function Hello($lang)
{
    echo "I Love  $lang <br>";
}
// PHP Function Arguments => Should provide Value/Data inside the function
Hello("PHP"); 
Hello("Java");

echo "<br><br>";

// Provide Multiple Value/Data inside the function.

function Hello1($lang1, $year)
{
    echo "I Love $lang1 from $year <br>";
}

Hello1("PHP", 2000);
Hello1("Java", 2010);

?>