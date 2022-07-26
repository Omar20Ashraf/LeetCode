<?php

/*  977_squares_of_a_sorted_array */

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {

        $nums = array_map(fn ($num) => pow($num, 2), $nums);
        sort($nums);

        return $nums;
    }

}