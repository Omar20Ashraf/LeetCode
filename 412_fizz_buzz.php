<?php

//412_fizz_buzz.php

class Solution
{

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n)
    {

        $result = [];

        for ($i = 1; $i <= $n; $i++) {

            if (is_int($i / 5) && is_int($i / 3)) {
                $result[$i] = 'FizzBuzz';
            } elseif (is_int($i / 3)) {
                $result[$i] = 'Fizz';
            } elseif (is_int($i / 5)) {
                $result[$i] = 'Buzz';
            } else {
                $result[$i] = "$i";
            }
        }

        return $result;
    }
}