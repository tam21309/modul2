<?php
// nốt
class Node {
    public $data;
    public $next = null;
    public function __construct($ts_data)
    {
        $this->data = $ts_data;
    }
}
class Linkedlist {
    public $firstNode = null;
    public function insert($elm){
        $node = new Node($elm);
        // echo '<pre>';
        // print_r($node);
        // die();
        if($this -> firstNode == null){
            $this -> firstNode = $node;
        }else {
            $curentNode = $this -> firstNode;
            while ( $curentNode -> next != null){
                $curentNode = $curentNode -> next;
            }
            $curentNode -> next = $node;
        }
    }
}
$objLinkedlist = new LinkedList();
$objLinkedlist->insert('Th.Tam');
$objLinkedlist->insert('B.Thang');
$objLinkedlist->insert('X.Thang');
$objLinkedlist->insert('H.Nhan');
$objLinkedlist->insert('P.Tam');

echo '<pre>';
print_r($objLinkedlist);
die();
