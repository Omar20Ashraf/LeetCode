<?php

class ReverseWordsInAString
{
    function reverseWords(string $s): string
    {   
        $s = preg_replace('/\s+/', ' ',  trim($s));
        $words = explode(' ', $s);
        $words = array_reverse($words);
        return implode(' ', $words);
    }

    function reverseWordsSecond(string $s): string 
    {
        $words = array_filter(explode(' ', $s), fn($w) => $w !== '');

        $reversedArray = array_reverse($words);

        return implode(' ', $reversedArray);
    }    
}