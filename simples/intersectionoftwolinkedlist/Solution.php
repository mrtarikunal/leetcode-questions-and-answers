<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode($headA, $headB)
    {
        $firstPointer = $headA;
        $secondPointer = $headB;
        while ($firstPointer !== $secondPointer) {
            $firstPointer = $firstPointer != null ? $firstPointer->next : $headB;
            $secondPointer = $secondPointer != null ? $secondPointer->next : $headA;
            }
        return $firstPointer;
    }
}
