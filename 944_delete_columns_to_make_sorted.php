<?php

//php.test/leetCode/944_delete_columns_to_make_sorted.php

class Solution
{

    /**
     * @param String[] $strs
     * @return Integer
     */
    static function minDeletionSize($strs)
    {
        $array_count = count($strs);
        $string_count = strlen($strs[0]);
        $result = 0;

        for ($i = 0; $i < $string_count; $i++) {
            for ($j = 0; $j < $array_count - 1; $j++) {
                $temp1 = $strs[$j];
                $temp2 = $strs[$j + 1];
                if (strcmp($temp1[$i], $temp2[$i]) > 0) {
                    $result++;
                    break;
                }
            }
        }
        return $result;        
    }
}

echo Solution::minDeletionSize(["cba", "daf", "ghi"]);