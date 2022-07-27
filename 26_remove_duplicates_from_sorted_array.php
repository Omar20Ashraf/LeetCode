<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {

        $original_count = count($nums);

        $nums = array_unique($nums);

        $unique_count = count($nums);

        sort($nums);

        $nums = array_pad($nums, $original_count, '-');

        return $unique_count;
    }
}