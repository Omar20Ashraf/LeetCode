<?php

//1672_richest_customer_wealth.php

class Solution
{

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    static function maximumWealth($accounts)
    {
        $sum = [];

        foreach($accounts as $account):
            $sum[] = array_sum($account);
        endforeach;

        return max($sum);
    }
}

echo Solution::maximumWealth([[2, 8, 7], [7, 1, 3], [1, 9, 5]]);