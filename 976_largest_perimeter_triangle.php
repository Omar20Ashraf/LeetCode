<?php

//php.test/leetCode/976_largest_perimeter_triangle.php

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function largestPerimeter($nums)
    {
        sort($nums);

        for($i=count($nums) -3; $i >=0; $i--){
            if($nums[$i] + $nums[$i+1] > $nums[$i+2])
                return $nums[$i] + $nums[$i + 1] + $nums[$i + 2];
        }

        return 0;
    }
}