<?php

//php.test/leetCode/566_reshape_the_matrix.php

class Solution
{

    /**
     * @param int[][] $mat
     * @param int $r
     * @param int $c
     * @return int[][]
     */
    function matrixReshape($mat, $r, $c)
    {
        $original_rows = count($mat);
        $original_cols = count($mat[0]);
        if ($original_rows * $original_cols != $r * $c)
            return $mat;
        
        $result  = [];

        for($i=0; isset($mat[$i]); $i++){
            for($j=0; isset($mat[$i][$j]); $j++){
                $temp []= $mat[$i][$j];

                if(count($temp) == $c){
                    $result []= $temp;
                    $temp = [];
                }
            }

        }

        return $result;

    }
}
