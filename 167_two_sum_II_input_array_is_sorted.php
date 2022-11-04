<?php

//php.test/leetCode/167_two_sum_II_input_array_is_sorted.php


class Solution
{

    /**
     * @param int[] $numbers
     * @param int $target
     * @return int[]
     */
    function twoSum($numbers, $target)
    {
        // $numbers =  array_unique($numbers);
        $result = [];

        for($i=0; $i < count($numbers); $i++){
            $result[0] = $i +1;

            for ($j = $i + 1; $j < count($numbers); $j++) {

                if (($numbers[$i] + $numbers[$j] == $target)) {
                    $result[] = $j + 1;
                    return $result;
                }
            }
        }
    }
    
    /**
     * @param int[] $numbers
     * @param int $target
     * @return int[]
     */
    function secondTwoSum($numbers, $target)
    {
        $left = 0;
        $right = count($numbers) - 1;

        while ($left < $right) {
            $sum = $numbers[$left] + $numbers[$right];

            if ($sum === $target) {
                return [$left + 1, $right + 1];
            } else if ($sum < $target) {
                $left++;
            } else {
                $right--;
            }
        }
    }
}