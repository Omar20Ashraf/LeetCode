<?php

class GreatestCommonDivisorofStrings 
{
    function gcdOfStrings(string $str1, string $str2): string
    {
        // If they don't share the same repeating pattern, no gcd string exists
        if ($str1 . $str2 !== $str2 . $str1) {
            return '';
        }

        $g = $this->gcd(a: strlen($str1), b: strlen($str2));
        return substr($str1, 0, $g);
    }

    function gcd(int $a, int $b): int
    {
        while ($b !== 0) {
            $tmp = $a % $b;
            $a = $b;
            $b = $tmp;
        }
        return $a;
    }   
}