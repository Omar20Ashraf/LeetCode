<?php

//php.test/leetCode/1232_check_if_it_is_a_straight_line.php

class Solution
{

    /**
     * @param int[][] $coordinates
     * @return Boolean
     */
    function checkStraightLine($coordinates)
    {
        if (count($coordinates) <= 2)
            return true;

        $x1 = $coordinates[0][0];
        $y1 = $coordinates[0][1];

        $x2 = $coordinates[1][0];
        $y2 = $coordinates[1][1];

        $x_different = $x2 - $x1;
        $y_different = $y2 - $y1;

        for ($i = 2; $i < count($coordinates); $i++) {
            $current_y_different = $coordinates[$i][1] - $y1;
            $current_x_different = $coordinates[$i][0] - $x1;

            if (($current_y_different * $x_different) != ($current_x_different * $y_different))
                return false;
        }
        return true;       
    }
}