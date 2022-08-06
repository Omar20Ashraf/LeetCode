<?php
//1051_height_checker

class Solution
{

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights)
    {
        $second_array = $heights;
        $diff = 0;
        sort($heights);

        for ($i = 0; $i < count($heights); $i++) :
            $heights[$i] !== $second_array[$i] ? $diff++ : '';
        endfor;

        return $diff;
    }
}