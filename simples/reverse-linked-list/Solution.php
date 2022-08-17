<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        // Step 1
        $previous = null;
        $current = $head;
        $next = $head;

        // Step 2
        while($current !== null) {
            $next = $next->next;
            $current->next = $previous;
            $previous = $current;
            $current = $next;
        }
       // Step 3
        return $previous;
    }
}
