<?php

//283_move_zeros.php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes($nums)
    {

        foreach($nums as $ke=> $num):
            
            if($num == 0){
                $nums[] = 0;
                unset($nums[$ke]);
            }
        endforeach;

        return $nums;
    }   
}