<?php

//1480_running_sum_of_1d_array

class Solution
{

    /**
     * @param [] $nums
     * @return Integer[]
     */
    static function runningSum($nums)
    {
        $result[0] = $nums[0];

        for($i=1; $i < count($nums); $i++):

            $result[] = $result[$i - 1] + $nums[$i];
        endfor;

        return $result;
    }
}

print_r(Solution::runningSum([3, 1, 2, 10, 1]));