<?php

//php.test/leetCode/1502_can_make_arithmetic_progression_from_sequence.php

class Solution
{

    /**
     * @param int[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr)
    {
        sort($arr);
        $min = $arr[1] - $arr[0];
        for ($i = 1; $i < count($arr) - 1; $i++) {
            $temp = $arr[$i + 1] - $arr[$i];
            if ($min != $temp) {
                return false;
            }
        }

        return true;
    }
}