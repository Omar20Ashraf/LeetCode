<?php


class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $elements = array_count_values($nums);

        $nums = array_map(fn ($num) => $num == $val ? '_' : $num, $nums);
        sort($nums);

        return count($nums) - $elements[$val];
    }
}