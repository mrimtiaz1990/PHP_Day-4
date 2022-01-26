<?php

function sum($num1,$num2,$num3)
{
	$result = $num1 + $num2 + $num3;
	return $result;
}

function avarage($totalValue)
{
	$tValue = $totalValue / 3;
	return $tValue;
}

$total = sum(80,30,50);
echo "The Total Result is ".$total ."<br>";

$avarageresult = avarage($total);
echo "Avarage Are: ".$avarageresult."%";

?>