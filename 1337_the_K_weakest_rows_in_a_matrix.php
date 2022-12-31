<?php

//php.test/leetCode/1337_the_K_weakest_rows_in_a_matrix.php

class Solution
{

    /**
     * @param Integer[][] $mat
     * @param int $k
     * @return Integer[]
     */
    function kWeakestRows($mat,$k) 
    {   
        $result = [];

        foreach($mat as $key=>$m):
            $array_values = array_count_values($m);
            $result[$key] = $array_values[1];
        endforeach;

        asort($result);
        $result = array_keys($result);
        return array_slice($result, 0, $k);


    }
}