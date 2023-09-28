<?php
class ListNode
{
    public $val;
    public $next;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function addTwoNumbers($l1, $l2)
{
    $dummyHead = new ListNode(0);
    $current = $dummyHead;
    $carry = 0;

    while ($l1 || $l2 || $carry) {
        $x = $l1 ? $l1->val : 0;
        $y = $l2 ? $l2->val : 0;
        $sum = $x + $y + $carry;
        $carry = (int)($sum / 10);

        $current->next = new ListNode($sum % 10);
        $current = $current->next;

        if ($l1) $l1 = $l1->next;
        if ($l2) $l2 = $l2->next;
    }

    return $dummyHead->next;
}

// Helper function to create linked lists
function createLinkedList($arr)
{
    $dummyHead = new ListNode(0);
    $current = $dummyHead;

    foreach ($arr as $val) {
        $current->next = new ListNode($val);
        $current = $current->next;
    }

    return $dummyHead->next;
}

// Helper function to print linked lists
function printLinkedList($head)
{
    $current = $head;
    while ($current) {
        echo $current->val;
        if ($current->next) echo " -> ";
        $current = $current->next;
    }
    echo PHP_EOL;
}

// Example usage:
$list1 = createLinkedList([2, 4, 3]);
$list2 = createLinkedList([5, 6, 4]);

$result = addTwoNumbers($list1, $list2);
printLinkedList($result); // Output: 7 -> 0 -> 8
