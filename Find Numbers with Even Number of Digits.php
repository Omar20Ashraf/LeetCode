<?php


/* Find Numbers with Even Number of Digits.php */

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $result = 0;

        for ($i = 0; $i < count($nums); $i++) {

            $currentItem = (string) $nums[$i];

            if(strlen($currentItem) % 2 == 0)
                $result++;
        }

        return $result;
    }
}
