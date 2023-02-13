<?php

//php.test/leetCode/1_two_sum.php

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function firstTwoSum($nums, $target)
    {
        if(count($nums) == 2)
            return [0,1];

        $result = [];

        for($i=0; $i<count($nums); $i++){

            for($j=$i+1; $j<count($nums); $j++){
                if($nums[$i] + $nums[$j] == $target){
                    $result[] = $i;
                    $result[] = $j;
                    break;
                }
            }

            if(!empty($result))
                break;
        }

        return $result;        
    }


    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function secondTwoSum($nums, $target)
    {
        $result = [];
        for ($i = 0; $i < count($nums); $i++) {

            $complement = $target - $nums[$i];

            if (isset($result[$complement])) {
                return [$result[$complement], $i];
            }

            $result[$nums[$i]] = $i;
        }       
    }
}