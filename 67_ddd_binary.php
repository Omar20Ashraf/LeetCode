<?php

//php.test/leetCode/67_ddd_binary.php

class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $result = '';
        $a = strrev($a);
        $b = strrev($b);
        $carry = 0;
        $max_length = max(strlen($a),strlen($b));

        for($i =0; $i< $max_length; $i++){

            $charA = $a[$i] ?? 0;
            $charB = $b[$i] ?? 0;

            $total = '';

            if($carry == 0){

                if($charA == 0 && $charB == 0){
                    $total = 0;                   
                } elseif ($charA == 1 && $charB == 1) {
                    $total = 0;
                    $carry = 1;
                } elseif(($charA == 1 && $charB == 0) ||( $charA == 0 && $charB == 1)){
                    $total = 1;
                }

            }else{

                if ($charA == 0 && $charB == 0) {
                    $total = 1;
                    $carry = 0;                    
                } elseif ($charA == 1 && $charB == 1) {
                    $total = 1;

                } elseif (($charA == 1 && $charB == 0) || $charA == 0 && $charB == 1) {
                    $total = 0;
                }

            }

            $result = $total . '' . $result;
        }

        if ($carry)
            $result = '1' . $result;

        return $result;
    }

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function second($a, $b)
    {
        $result = '';
        $a = strrev($a);
        $b = strrev($b);
        $carry = 0;
        $max_length = max(strlen($a), strlen($b));

        for ($i = 0; $i < $max_length; $i++) {
            $sum = $carry;
            
            isset($a[$i]) ? $sum += $a[$i] - 0 : '';

            isset($b[$i]) ? $sum += $b[$i] - 0 : '';
            
            $result = ($sum % 2). '' . $result;
            
            $carry = $sum > 1 ? 1 : 0;
        }

        if ($carry)
            $result = '1' . $result;

        return $result;
    }    
}