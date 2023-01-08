<?php

//php.test/leetCode/191_number_of_1_bits.php

class Solution
{
    /**
     * @param int $n
     * @return int
     */
    function hammingWeight($n)
    {
        $binary = decbin($n);

        return substr_count($binary,1); 
    }
}