<?php

//1342_number_of_steps_to_reduce_a_number_to_zero.php

class Solution
{

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num)
    {
        $steps = 0;

        while ($num > 0) {
            if ($num % 2 == 0) {
                $num = $num / 2;
            } else {
                $num = $num - 1;
            }
            $steps++;
        }

        return $steps;
    }
}