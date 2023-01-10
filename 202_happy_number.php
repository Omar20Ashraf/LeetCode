<?php

//php.test/leetCode/202_happy_number.php

class Solution
{

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n)
    {
        while (true) {

            $squares[] = $n;

            if ($n == 1)
            return true;

            $numbers = str_split($n);

            $numbers = array_map(fn ($num) => pow($num, 2), $numbers);

            $n = array_sum($numbers);

            if (in_array($n, $squares))
                return false;
        }
    }
}