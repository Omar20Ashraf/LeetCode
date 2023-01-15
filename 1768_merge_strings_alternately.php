<?php

//php.test/leetCode/1768_merge_strings_alternately.php

class Solution
{

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2)
    {
        $max_length = max(strlen($word1), strlen($word2));

        $result = '';
        for($i=0; $i< $max_length; $i++){
            $result.= isset($word1[$i]) ? $word1[$i] : '';
            $result.= isset($word2[$i]) ? $word2[$i] : '';
        }

        return $result;
    }
}