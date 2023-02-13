<?php

//php.test/leetCode/3_longest_substring_without_repeating_characters.php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {

        $temp = "";
        $result = 0;
        $chars = str_split($s);
        $length = count($chars);

        for ($i = 0; $i < $length; $i++) {
            $temp  = $chars[$i];

            for ($j = $i + 1; $j < $length; $j++) {
                if (str_contains($temp, $chars[$j])) 
                    break;
                else  
                    $temp .= $chars[$j];
            }

            $result = max(strlen($temp),$result);
        }

        return $result;     
    }
}