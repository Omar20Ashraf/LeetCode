<?php

//php.test/leetCode/189_rotate_array.php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate($nums, $k)
    {   
        $lastIndex = count($nums) - 1;
        for($i=0; $i< $k; $i++){

            $lastElement = $nums[$lastIndex];
            array_unshift($nums,$lastElement);
            array_pop($nums);
        }

        return $nums;
    }

    /**
     * @param Integer[] $nums
     * @param int $k
     * @return NULL
     */
    function secondRotate($nums, $k)
    {
        $count = count($nums);
        $k %= $count;
        $sliced = array_splice($nums, ($count - $k));
        $nums = array_merge($sliced, $nums);
        return $nums;
    }
}