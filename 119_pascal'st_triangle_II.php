<?php

//php.test/leetCode/119_pascal'st_triangle_II.php

class Solution
{

    /**
     * @param Integer $rowIndex
     * @return Integer[][]
     */
    static function getRow($rowIndex)
    {
        $result[] = [1];

        for ($i = 1; $i <= $rowIndex; $i++) {

            $inside = [1];

            $previous = $result[$i - 1];

            for ($j = 0; $j < $i - 1; $j++) :
                $inside[] = $previous[$j] + $previous[$j + 1];
            endfor;

            $inside[] = 1;

            $result[] = $inside;
        }

        return $result[$rowIndex];
    }
}

echo "<pre>";
print_r(Solution::getRow(3));   
echo "</pre>";