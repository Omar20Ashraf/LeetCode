<?php

// 747_largest_number_at_least_twice_of_others.php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums)
    {
        $largest = max($nums);
        $largestIndex = array_search($largest, $nums);

        for ($i = 0; $i < count($nums); $i++) {

            if ($i != $largestIndex) {

                $element = 2 * $nums[$i];
                if ($largest < $element) {
                    return -1;
                }
            }
        }

        return $largestIndex;
    }
}