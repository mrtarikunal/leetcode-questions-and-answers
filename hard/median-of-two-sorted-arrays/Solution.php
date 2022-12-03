<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $nums = array_merge($nums1, $nums2);
        sort($nums);
        $leng = count($nums);
        if ($leng % 2 == 0) {
            return ($nums[$leng / 2] + $nums[$leng / 2 - 1]) / 2;
        } else {
            return $nums[floor($leng / 2)];
        }
    }
}
