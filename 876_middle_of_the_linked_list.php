<?php

//php.test/leetCode/876_middle_of_the_linked_list.php

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
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head)
    {
        $fast = $head;
        $slow = $head;

        while ($fast && $fast->next) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }

        return $slow;
    }
}