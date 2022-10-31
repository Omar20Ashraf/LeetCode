<?php

//php.test/leetCode/344_reverse_string.php

class Solution
{

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        //first solution
        // $s = array_reverse($s);

        // second solution
        // $reversedArray = [];

        // for($i=count($s)-1; $i >= 0 ; $i--){

        //     $reversedArray[] = $s[$i];
        // }

        // $s = $reversedArray;

        $i = 0;
        $j = count($s) - 1;
        while ($i < $j) {
            $temp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $temp;

            $i++;
            $j--;
        }

    }
}