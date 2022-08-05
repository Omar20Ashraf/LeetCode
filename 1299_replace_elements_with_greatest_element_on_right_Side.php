<?php

//1299_replace_elements_with_greatest_element_on_right_Side.php

class Solution
{

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    static function replaceElements($arr)
    {

        $out = [];
        foreach ($arr as $k => $v) {
            array_shift($arr);

            if (!empty($arr)) {
                $out[] = max($arr);
            }
        }
        $out[] = -1;
        return $out;
    }
}

print_r(Solution::replaceElements([17, 18, 5, 4, 6, 1]));