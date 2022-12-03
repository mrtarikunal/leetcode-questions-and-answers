<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $stack = array();
        $max = 0;
        $start = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == '(') {
                array_push($stack, $i);
            } else {
                if (empty($stack)) {
                    $start = $i + 1;
                } else {
                    array_pop($stack);
                    if (empty($stack)) {
                        $max = max($max, $i - $start + 1);
                    } else {
                        $max = max($max, $i - end($stack));
                    }
                }
            }
        }
        return $max;
    }
}
