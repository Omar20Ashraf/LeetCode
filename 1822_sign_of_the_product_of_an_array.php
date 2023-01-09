<?php

//php.test/leetCode/1822_sign_of_the_product_of_an_array.php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arraySign($nums)
    {
    
        if(in_array(0,$nums)){
            return 0;
        }else{
            $product = array_product($nums);
            if ($product > 0) {
                return 1;
            } else {
                return -1;
            }
        }

    }
}