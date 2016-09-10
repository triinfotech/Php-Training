<?php  

/*

Smallest multiple
Problem 5

2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

*/

function is_divisble($n)
{
	for ($i = 1; $i <= 20; $i++)
		if ($n % $i != 0)
			return 0;

	return 1;
}

$n = 20;

while (1)
{
	if (is_divisble($n))
		break;

	$n += 20;
}

echo $n;

?>