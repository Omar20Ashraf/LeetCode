<?php

//php.test/leetCode/1572_matrix_diagonal_sum.php

class Solution
{

    /**
     * @param int[][] $mat
     * @return Integer
     */
    function diagonalSum($mat)
    {
        $n = count($mat);
        $primary = 0;
        $secondary = 0;
        for ($i = 0; $i < $n; $i++) {
            $primary += $mat[$i][$i];
            if ($i !== $n - $i - 1) {
                $secondary += $mat[$i][$n - $i - 1];
            }
        }
        return $primary + $secondary;
    }
}
