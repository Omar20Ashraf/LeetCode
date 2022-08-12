<?php

//1672_richest_customer_wealth.php

class Solution
{

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts)
    {
        $sum = [];

        foreach($accounts as $account):
            $sum[] = array_sum($account);
        endforeach;

        return max($sum);
    }
}