<?php

//php.test/leetCode/589_n-ary_tree_preorder_traversal.php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution
{
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root)
    {
        //root left right
        $res = [];
        $this->fillResult($root, $res);
        return $res;
    }

    function fillResult($root, &$res)
    {
        array_push($res, $root->val);
        foreach ($root->children as $child) {
            if ($child->children == null)
                array_push($res, $child->val);
            else
                $this->fillResult($child, $res);
        }
    }
}