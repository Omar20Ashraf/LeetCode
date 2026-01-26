<?php

class ProductOfArrayExceptSelf {

    /**
     * @param int[] $nums
     * @return int[]
     */
    function productExceptSelf($nums) {
        $n = count($nums);
        $answer = array_fill(0, $n, 1);

        $leftProduct = 1;
        for ($i = 0; $i < $n; $i++) {
            $answer[$i] = $leftProduct;
            $leftProduct *= $nums[$i];
        }

        $rightProduct = 1;
        for ($i = $n - 1; $i >= 0; $i--) {
            $answer[$i] *= $rightProduct;
            $rightProduct *= $nums[$i];
        }

        return $answer;
    }
}