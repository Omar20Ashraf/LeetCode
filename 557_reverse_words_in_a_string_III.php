<?php

//php.test/leetCode/557_reverse_words_in_a_string_III.php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {   
        $s = strrev($s);
        $words = explode(' ',$s);
        $words = array_reverse($words);
        return implode(' ', $words);
    }
}