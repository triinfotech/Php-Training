<?php  

/*

Largest prime factor
Problem 3

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

*/

function is_prime($n)
{
	for ($i = 2; $i <= sqrt($n); $i++)
		if ($n % $i == 0)
			return 0;

	return 1;
}

$prime_factor = 0;

for ($i = 2; $i <= sqrt(600851475143); $i++)
	if (is_prime($i))
		if (600851475143 % $i == 0)
			$prime_factor = $i;

echo $prime_factor;

?>


