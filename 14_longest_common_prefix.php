<?php

//php.test/leetCode/14_longest_common_prefix.php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $result = '';

        $first = $strs[0];

        array_shift($strs);

        for($i=0; $i< strlen($first); $i++){

            foreach($strs as $str):

                if($i == strlen($str) || $str[$i] !== $first[$i])
                    return $result;
                
            endforeach;
            
            $result = $result .'' .$first[$i];
        }

        return $result;
    }
}