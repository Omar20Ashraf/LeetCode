<?php

class CanPlaceFlowers {

    /**
     * @param int[] $flowerbed
     * @param int $n
     * @return bool
     */
    function canPlaceFlowers($flowerbed, $n) 
    {
        if ($n === 0) return true;

        $len = count($flowerbed);
        $new = $flowerbed;

        for ($i = 0; $i < $len; $i++) {
            if ($new[$i] === 1) continue;

            $left = $i === 0 ? 0 : $new[$i -1];
            $right = $i == ($len - 1 ) ? 0 : $new[$i +1];

            if ($left === 0 && $right === 0) {
                $new[$i] = 1;
                $n--;

                if ($n === 0) return true;
            }
        }

        return false;
    }
}