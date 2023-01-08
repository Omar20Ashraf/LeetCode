<?php

//php.test/leetCode/1281_subtract_the_product_and_sum_of_digits_of_an_integer.php

class Solution
{

    /**
     * @param int $n
     * @return int
     */
    function subtractProductAndSum($n)
    {   
        $numbers= str_split($n);

        return array_product($numbers) - array_sum($numbers);
    }
}