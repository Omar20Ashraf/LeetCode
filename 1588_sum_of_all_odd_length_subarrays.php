<?php

//php.test/leetCode/1588_sum_of_all_odd_length_subarrays.php

class Solution
{

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function sumOddLengthSubarrays($arr)
    {
        $len = count($arr);
        $sum = array_sum($arr);

        if($len < 3)
            return $sum;
        if($len == 3)
            return $sum * 2;

        $maxSlice = $len % 2 == 0 ? $len -1 : $len; 

        for($slice = 3; $slice<= $maxSlice; $slice+=2){

            for($i=0; $i< $len-2; $i++){
                $sliced = array_slice($arr,$i,$slice);

                if(count($sliced) == $slice)
                    $sum+= array_sum($sliced);
            }
        }
        
        return $sum;
    }
}