<?php


/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s)
{

    $symbols = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    $returnValue = 0;

    for ($i =0 ; $i <= strlen($s) - 1; $i++) {

        $currentSymbol = $s[$i];
        $nextSymbol = $s[$i + 1];

        if ($currentSymbol == 'I' && in_array($nextSymbol, ['V', 'X'])) {
            $returnValue += $symbols[$nextSymbol] - $symbols[$currentSymbol];
            $i++;
        } elseif ($currentSymbol == 'X' && in_array($nextSymbol, ['L', 'C'])) {
            $returnValue += $symbols[$nextSymbol] - $symbols[$currentSymbol];
            $i++;
        } elseif ($currentSymbol == 'C' && in_array($nextSymbol, ['D', 'M'])) {

            $returnValue += $symbols[$nextSymbol] - $symbols[$currentSymbol];
            $i++;
        } else {
            $returnValue += $symbols[$currentSymbol];
        }
    }

    echo $returnValue;
};

romanToInt('MCMXCIV');
