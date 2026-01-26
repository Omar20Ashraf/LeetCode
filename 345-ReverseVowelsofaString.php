<?php

class ReverseVowelsofaString {

    static function reverseVowels(string $s): string 
    {
        $isVowel = array_flip(['a','e','i','o','u','A','E','I','O','U']);
        $chars = str_split($s);

        $i = 0;
        $j = count($chars) - 1;

        while ($i < $j) {
            $leftIsVowel  = isset($isVowel[$chars[$i]]);
            $rightIsVowel = isset($isVowel[$chars[$j]]);

            if (!$leftIsVowel) { $i++; continue; }
            if (!$rightIsVowel) { $j--; continue; }

            $tmp = $chars[$i];
            $chars[$i] = $chars[$j];
            $chars[$j] = $tmp;

            $i++;
            $j--;
        }

        return implode('', $chars);
    }
}

echo ReverseVowelsofaString::reverseVowels("hello");