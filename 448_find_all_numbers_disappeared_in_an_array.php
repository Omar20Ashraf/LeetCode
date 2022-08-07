<?php

//448_find_all_numbers_disappeared_in_an_array

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums)
    {
        // $result = [];

        // for($i=1; $i <= count($nums); $i++){

        //     if(!in_array($i,$nums)){

        //         $result[] = $i;
        //     }
        // }

        // return $result;

        return array_diff(range(1, count($nums)), array_unique($nums));         
    }

}