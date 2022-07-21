<?php
class Solution
{

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    static function canConstruct($ransomNote, $magazine)
    {
        $ransomNoteChars = array_count_values(str_split($ransomNote));
        $magazineChars = array_count_values(str_split($magazine));

        foreach ($ransomNoteChars as $char => $amount) {
            
            if (!isset($magazineChars[$char])) 
                return false;
            
            if ($magazineChars[$char] < $amount) 
                return false;
            
        }
        return true;
    }
}
