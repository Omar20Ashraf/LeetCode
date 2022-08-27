<?php

//66_plus_one.php

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {


        return str_split(bcadd(1, implode($digits)));
    }
}