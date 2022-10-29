<?php

//php.test/leetCode/28_find_the_index_of_the_first_occurrence_in_a_string.php

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    static function strStr($haystack, $needle)
    {
        $hayLen = strlen($haystack);
        $needLen = strlen($needle);

        if ($hayLen < $needLen) 
            return -1;

        for ($i = 0; $i < $hayLen; $i++) {
            $temp = '';

            for ($j = 0; $j < $needLen; $j++) {

                $temp = $temp . $haystack[$j + $i];

                if ($temp == $needle)
                    return $i;
            }
        }
        return -1;

    }
}

print_r( Solution::strStr('but sad', 'sad'));