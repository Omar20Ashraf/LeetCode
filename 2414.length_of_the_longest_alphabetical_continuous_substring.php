<?php

//php.test/leetCode/2414.length_of_the_longest_alphabetical_continuous_substring.php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    static function longestContinuousSubstring($s)
    {

        $string = str_split($s);
        $result = 1;
        $count = 1;

        for ($i = 1; $i < count($string); $i++) {
            $current = $string[$i];
            $pre = $string[$i - 1];

            if (ord($current) - ord($pre) == 1) {
                $count++;
            } else {
                $count = 1;
            }

            $result = max($result, $count);
        }

        return $result;
    }
}

echo Solution::longestContinuousSubstring('abcde');