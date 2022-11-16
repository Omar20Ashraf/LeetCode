<?php

//php.test/leetCode/374_guess_number_higher_or_lower.php

class GuessGame{

    public function guess($n)
    {
        # code...
    }
}

class Solution extends GuessGame
{
    /**
     * @param  int  $n
     * @return int
     */
    function guessNumber($n)
    {
        $right = $n;
        $left = 1;

        while (true) {

            $medium = floor(($left + $right) / 2);

            $guess = $this->guess($medium);

            if ($guess == 0) {
                return $medium;
            }
            if ($guess == -1) {
                $right = $medium - 1;
            }
            if ($guess == 1) {
                $left = $medium + 1;
            }
        }
    }
}