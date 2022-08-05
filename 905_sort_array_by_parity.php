<?php

//905_sort_array_by_parity.php

class Solution
{

    static function sortArrayByParity($nums)
    {
        foreach($nums as $key =>$num):

            if($num % 2 == 0){
                unset($nums[$key]);
                array_unshift($nums, $num);
            }

        endforeach;

        return $nums;
    }   
}

print_r(Solution::sortArrayByParity([0, 1, 0, 3, 12]));