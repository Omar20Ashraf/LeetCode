<?php

// 724_find_pivot_index.php

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function pivotIndex($nums)
    {
        $totalSum = array_sum($nums);
        $right = $totalSum;
        $left = 0;

        for ($i = 0; $i < count($nums); $i++) {
            $right -= $nums[$i];

            if ($right == $left) {
                return $i;
            }

            $left += $nums[$i];
        }

        return -1;
    }
}
