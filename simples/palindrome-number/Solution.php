<?php
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x==0) {
            return true;
        }
        if($x>0) {
            $reverse = strrev((string)$x);
            if ((string)$x == $reverse) {
                return true;
            }

        }
        return false;
    }