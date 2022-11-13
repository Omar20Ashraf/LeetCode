<?php

//php.test/leetCode/151_reverse_words_in_a_string.php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {   
        $s = preg_replace('/\s+/', ' ',  trim($s));
        $words = explode(' ',$s);
        $words = array_reverse($words);
        return implode(' ', $words);
    }
}