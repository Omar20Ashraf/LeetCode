<?php

/*  Duplicate Zeros */

class Solution
{

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr)
    {

        $resultArray = [];

        if (in_array(0, $arr)) {

            foreach ($arr as $value) {
                $resultArray[] = $value;
                $value == 0 ? $resultArray[] = 0 : '';
            }

            array_splice($resultArray, count($arr), count($resultArray) - count($arr));

            $arr = $resultArray;
        }
    }
}