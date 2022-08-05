<?php

//283_move_zeros.php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    static function moveZeroes($nums)
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

print_r(Solution::moveZeroes([0, 1, 0, 3, 12]));