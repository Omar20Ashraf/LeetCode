<?php

//php.test/leetCode/1779_find_nearest_point_that_ha_the_same_X_or_Y_coordinate.php

class Solution
{

    /**
     * @param int $x
     * @param int $y
     * @param int[][] $points
     * @return int
     */
    function nearestValidPoint($x, $y, $points)
    {
        $min = PHP_INT_MAX;
        $index=-1;

        for($i=0; $i< count($points); $i++){

            if($x == $points[$i][0] || $y== $points[$i][1]){
                $d = abs($x - $points[$i][0]) + abs($y - $points[$i][1]);

                if($d<$min){
                    $min=$d;
                    $index=$i;
                }
            }
        }

        return $index;
    }
}