<?php

//php.test/leetCode/496._next_greater_element_i.php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2)
    {
        $result = [];

        for ($i = 0; $i < count($nums1); $i++) {

            $key = array_search($nums1[$i], $nums2);

            $newKey = count($result);

            $result[$newKey] = -1;

            for ($j = $key + 1; $j < count($nums2); $j++) {
                if ($nums2[$j] > $nums1[$i]) {
                    $result[$newKey] = $nums2[$j];
                    break;
                }
            }
        }

        return $result;
    }
}