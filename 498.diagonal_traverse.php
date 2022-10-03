<?php

//php.test/leetCode/498.diagonal_traverse.php

class Solution
{

    /**
     * @param Integer[][] $mat
     * @return Integer[]
     */
    function findDiagonalOrder($mat)
    {
        $row_num = count($mat);
        $col_num = count($mat[0]);

        if ($row_num == 0 || $col_num == 0)
            return [];

        $current_row = $current_col = 0;
        $up = true;
        $result = [];

        while ($current_row < $row_num && $current_col < $col_num
        ) :

            if ($up) {

                while ($current_row > 0 && $current_col < $col_num - 1) {
                    $result[] = $mat[$current_row][$current_col];
                    $current_row--;
                    $current_col++;
                }
                $result[] = $mat[$current_row][$current_col];

                if ($current_col == $col_num - 1)
                    $current_row++;
                else
                $current_col++;
            } else {

                while ($current_col > 0 && $current_row < $row_num - 1) {
                    $result[] = $mat[$current_row][$current_col];
                    $current_row++;
                    $current_col--;
                }
                $result[] = $mat[$current_row][$current_col];

                if ($current_row == $row_num - 1)
                    $current_col++;
                else
                $current_row++;
            }

            $up = !$up;

        endwhile;

        return $result;
    }
}