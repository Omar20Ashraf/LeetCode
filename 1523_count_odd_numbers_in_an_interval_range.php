<?php

//php.test/leetCode/1523_count_odd_numbers_in_an_interval_range.php

class Solution
{

    /**
     * @param int $low
     * @param int $high
     * @return int
     */
    function countOdds($low, $high)
    {
        // $result = 0;
        // for($i=$low; $i<=$high; $i++){
        //     if($i % 2 != 0)
        //         $result++;
        // }

        // return $result;

        if (($low & 1) == 0)
            $low++;
        
        $oddNumbers = ($high - $low) / 2 + 1;

        return $low > $high ? 0 : (int) $oddNumbers;        
    }
}