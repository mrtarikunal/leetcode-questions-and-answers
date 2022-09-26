<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $slowPointer = 0;
        $fastPointer = 0;
        while (true) {
            $slowPointer = $nums[$slowPointer];
            $fastPointer = $nums[$nums[$fastPointer]];
            if ($slowPointer == $fastPointer) {
                break;
            }
        }

        $secondSlowPointer = 0;

        while (true) {
            $slowPointer = $nums[$slowPointer];
            $secondSlowPointer = $nums[$secondSlowPointer];
            if ($slowPointer == $secondSlowPointer) {
                return $slowPointer;
            }
        }
    }
}