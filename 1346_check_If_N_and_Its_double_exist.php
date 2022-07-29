<?php

//1346_check_If_N_and_Its_double_exist.php

class Solution
{

    /**
     * @param [] $arr
     * @return Boolean
     */
    static function checkIfExist($arr)
    {
        $result = false;
        
        for ($i = 0; $i < count($arr); $i++) :

            $search = array_search($arr[$i] * 2, $arr);

            if ($search != '' && $search!= $i ) {

                $result = true;
                break;
            }
        endfor;

        return  $result;
    }
}

echo Solution::checkIfExist([10, 2, 5, 3]);