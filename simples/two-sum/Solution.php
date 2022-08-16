<?php
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    foreach($nums as $i => $num) {
        foreach($nums as $j => $number) {
            if($i !=$j && $num+$number == $target) {
                return [$i, $j] ;
            }
        }
    }
}