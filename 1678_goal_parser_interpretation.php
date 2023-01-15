<?php

//php.test/leetCode/1678_goal_parser_interpretation.php

class Solution
{

    /**
     * @param String $command
     * @return String
     */
    function interpret($command)
    {   
        $result = '';
        for($i=0; $i < strlen($command); $i++){
            
            if($command[$i] == 'G'){
                $result.= 'G';
            }elseif($command[$i] == '('){
                if($command[$i +1] == ')'){
                    $result .= 'o';
                    $i++;
                }else{
                    $result .= 'al';
                    $i+=3;
                }
            }
        }

        return $result;
    }
}