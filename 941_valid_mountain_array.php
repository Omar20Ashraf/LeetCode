<?php

//941_valid_mountain_array.php

class Solution
{

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function validMountainArray($arr)
    {
        $i = 0;
        $j = count($arr) - 1;
        while (isset($arr[$i + 1]) && $arr[$i] < $arr[$i + 1]
        ) $i++;
        while (isset($arr[$j - 1]) && $arr[$j] < $arr[$j - 1]
        ) $j--;
        return $i == $j && $i > 0 && $j < count($arr) - 1;
    }
}