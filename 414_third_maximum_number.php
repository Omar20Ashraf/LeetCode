<?php

//414_third_maximum_number

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums)
    {
        $nums = array_unique($nums);

        rsort($nums);
        if (count($nums) > 2) {
            $max = $nums[2];
        } else {
            $max = $nums[0];
        }

        return $max;
    }
}