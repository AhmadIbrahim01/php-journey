<!-- Linked list having a method that traverses and prints only nodes values having 2 vowels -->
<?php

class Node {
    public $data;
    public $next;

    function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head;
    public $tail;

    function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    function displayNodes() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . "\n";
            $current = $current->next;
        }
    }

    function addNodeToTheEnd($value) {
        $node = new Node($value);
        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $this->tail->next = $node;
            $this->tail = $node;
        }
    }

    function displayNodesWithTwoVowels() {
        $current = $this->head;
        while ($current !== null) {
            if ($this->countVowels($current->data) == 2) {
                echo $current->data . " ";
            }
            $current = $current->next;
        }
    }

    function countVowels($value) {
        $value = strtolower($value);
        $vowelCount = 0;
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        for ($i = 0; $i < strlen($value); $i++) {
            if (in_array($value[$i], $vowels)) {
                $vowelCount++;
            }
        }

        return $vowelCount;
    }

}

$list = new LinkedList();
$list->addNodeToTheEnd("hello");
$list->addNodeToTheEnd("world");
$list->addNodeToTheEnd("aa");
$list->addNodeToTheEnd("aaa");

echo "Nodes with exactly two vowels:\n";

$list->displayNodesWithTwoVowels();
?>
