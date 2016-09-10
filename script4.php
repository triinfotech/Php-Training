<?php 

/*

Largest palindrome product
Problem 4

A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.

*/

function is_palindrome($n)
{
	return intval(strrev(strval(abs($n)))) == $n;
}

$palindrome = 0;
$a = 0; $b = 0;

for ($i = 100; $i <= 999; $i++)
{
	for ($j = $i+1; $j <= 999; $j++)
		if (is_palindrome($i*$j)) 
		{
			$palindrome =  $i*$j;
			$a = $i;
			$b = $j;
		}
		
		//echo $i . ' X ' . $j . ' = ' . ($i*$j). '<br>'; 
}

echo $a . ' X ' . $b . ' = ' . $palindrome;

?>