<?php

class KidsWiththeGreatestNumberofCandies 
{
    /**
     * @param int[] $candies
     * @param int  $extraCandies
     * @return bool[]
     */
    function kidsWithCandies(array $candies, int $extraCandies) 
    {
        $maxKid = max($candies);
        
        $result = [];

        foreach ($candies as $candy) {
            $result[] = ($candy + $extraCandies) >= $maxKid;
        }

        return $result;
    }
}