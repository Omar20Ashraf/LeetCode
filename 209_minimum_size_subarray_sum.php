<?php

//php.test/leetCode/209_minimum_size_subarray_sum.php

class Solution
{

    /**
     * @param int $target
     * @param int[] $nums
     * @return int
     */
    function minSubArrayLen($target, $nums)
    {
        $len = PHP_INT_MAX;
        $left = $total= 0 ;

        for($right = 0; $right < count($nums);$right++):
            $total += $nums[$right];

            while($total >= $target){
                $len = min($right - $left +1,$len);
                $total -= $nums[$left];
                $left++;
            }
        endfor;

        return $len == PHP_INT_MAX ? 0 : $len;
    }
}