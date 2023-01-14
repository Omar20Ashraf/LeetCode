<?php

//php.test/leetCode/1790_check_if_one_string_swap_can_make_strings_equal.php

class Solution
{

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function areAlmostEqual($s1, $s2)
    {
        if ($s1 == $s2) {
            return true;
        } else {
            $diff = 0;
            $firstDiff = -1;
            $secondDiff = -1;

            for ($i = 0; $i < strlen($s1); $i++) {
                if ($s1[$i] != $s2[$i]) {
                    $diff++;
                    if ($firstDiff == -1) {
                        $firstDiff = $i;
                    } else {
                        $secondDiff = $i;
                    }
                }
            }

            if ($diff == 2) {
                return $s1[$firstDiff] == $s2[$secondDiff] && $s1[$secondDiff] == $s2[$firstDiff];
            } else {
                return false;
            }
        }
    }
}