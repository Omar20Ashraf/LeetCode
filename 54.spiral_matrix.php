<?php

//php.test/leetCode/54.spiral_matrix.php

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix)
    {

        $result = [];

        if (count($matrix) > 0) {

            $top = 0;
            $bottom = count($matrix) - 1;
            $left = 0;
            $right = count($matrix[0]) - 1;
            $size = count($matrix) * count($matrix[0]);

            while (count($result) < $size) {
                //go right
                for ($i = $left; $i <= $right && count($result) < $size; $i++) {
                    $result[] = $matrix[$top][$i];
                }
                $top++;

                //go bottom
                for ($i = $top; $i <= $bottom && count($result) < $size; $i++) {
                    $result[] = $matrix[$i][$right];
                }
                $right--;

                //go left
                for ($i = $right; $i >= $left && count($result) < $size; $i--) {
                    $result[] = $matrix[$bottom][$i];
                }
                $bottom--;

                //go up
                for ($i = $bottom; $i >= $top && count($result) < $size; $i--) {
                    $result[] = $matrix[$i][$left];
                }
                $left++;
            }
        }

        return $result;
    }
}