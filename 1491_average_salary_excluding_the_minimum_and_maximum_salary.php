<?php

//php.test/leetCode/1491_average_salary_excluding_the_minimum_and_maximum_salary.php

class Solution
{

    /**
     * @param Integer[] $salary
     * @return Float
     */
    function average($salary)
    {   
        $min =  min($salary);
        $max = max($salary);

        $remaining_salaries = array_map(function($num) use ($min,$max){
            return ($num != $min && $num != $max) ? $num : '';
        },$salary);

        return array_sum($remaining_salaries) / (count($salary) - 2);
    }

}