<?php

//php.test/leetCode/389_find_the_difference.php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t)
    {
        $s_array = str_split($s);
        $t_array = str_split($t);
        sort($s_array);
        sort($t_array);

        for($i=0; $i< count($t_array); $i++){
            if(isset($s_array[$i])){

                if($t_array[$i] != $s_array[$i]){
                    return $t_array[$i];
                }
            }else{
                return $t_array[$i];
            }
        }
    }
}