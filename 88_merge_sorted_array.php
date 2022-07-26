<?php

/*  88_merge_sorted_array */

class Solution {
    /**
     * @param Integer[] $nums1
     * @param int $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    static function merge($nums1, $m, $nums2, $n)
    {

        array_splice($nums1, $m);

        $nums1 = array_merge($nums1,$nums2);

        sort($nums1);

        return $nums1;
    }

}

echo "<pre>";
print_r(Solution::merge([1, 2, 3, 0, 0, 0,9,5], 3, [2, 5, 6,9], 4));
echo "</pre>";
