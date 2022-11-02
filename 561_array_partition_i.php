<?php

//php.test/leetCode/561_array_partition_i.php


class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    static function arrayPairSum($nums)
    {
        sort($nums);
        $newNums = array_chunk($nums, 2);
        $counts = 0;
        foreach ($newNums as $newNum) {
            $counts += $newNum[0];
        }
        return $counts;        
    }
}