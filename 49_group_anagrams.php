<?php

//php.test/leetCode/49_group_anagrams.php

class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $result = [];

        for ($i = 0; $i < count($strs); $i++) {
            $temp = str_split($strs[$i]);
            sort($temp);
            $index = implode($temp);

            $result[$index][] = $strs[$i];
        }

        return $result;
    }  
}
