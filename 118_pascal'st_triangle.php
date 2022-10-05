<?php

//php.test/leetCode/118_pascal'st_triangle.php

class Solution
{

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows)
    {

        $result[] = [1];

        for ($i = 1; $i < $numRows; $i++) {

            $inside = [1];

            $previous = $result[$i - 1];

            for ($j = 0; $j < $i - 1; $j++) :
                $inside[] = $previous[$j] + $previous[$j + 1];
            endfor;

            $inside[] = 1;

            $result[] = $inside;
        }

        return $result;
    }
}