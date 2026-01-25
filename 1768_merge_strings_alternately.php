<?php

//php.test/leetCode/1768_merge_strings_alternately.php

class Solution
{
    function mergeAlternately(string $word1, string $word2): string
    {
        $len1 = strlen($word1);
        $len2 = strlen($word2);
        $max  = max($len1, $len2);

        $result = '';
        for ($i = 0; $i < $max; $i++) {
            if ($i < $len1) $result .= $word1[$i];
            if ($i < $len2) $result .= $word2[$i];
        }

        return $result;
    }
}