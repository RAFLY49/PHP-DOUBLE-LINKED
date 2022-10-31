<?php
class Node {
  public $data;
  public $next;
  public $prev;
}

class LinkedList {
  public $head;

  public function __construct(){
    $this->head = null;
  }

  public function PrintList() {
    $temp = new Node();
    $temp = $this->head;
    if($temp != null) {
      echo "daftar list: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
      }
      echo "\n";
    } else {
      echo "list tidak berisi.\n";
    }
  }   
};


$MyList = new LinkedList();


$first = new Node();
$first->data = 50;
$first->next = null;
$first->prev = null;
$MyList->head = $first;


$second = new Node();
$second->data = 100;
$second->next = null;
$second->prev = $first;
$first->next = $second;

$third = new Node();
$third->data = 200;
$third->next = null;
$third->prev = $second;
$second->next = $third;

$MyList->PrintList();   
?>