<?php

// PHP Function Arguments with Strict Datatype => Mention in Function Data Type of  Value/Data inside the function

function Hello(string $lang)
{
    echo "I Love  $lang <br>";
}

Hello("PHP"); 
Hello("Java");

echo "<br><br>";

// Provide Multiple Value/Data inside the function simillar to datatype.

function Hello1(string $lang1, int $year)
{
    echo "I Love $lang1 from $year <br>";
}

Hello1("PHP", 2000);
Hello1("Java", 2010);

echo "<br><br>";


function Number(int $num1, int $num2)
{
    echo "Sum of $num1+$num2 <br>";
}

Number(55, 10);
// Number(21, 8n13); // String 8n13 will not accepted


?>