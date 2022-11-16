<?php

//php.test/leetCode/707_design_linked_list.php

class Node
{

    public $data, $next;

    public function __construct($data)
    {
        # code...
        $this->data = $data;
        $this->next = Null;
    }
}

class MyLinkedList
{
    private $head, $last, $length;

    /**
     */
    function __construct()
    {
        $this->head = $this->last = new Node(Null);
        $this->length = 0;
    }

    /**
     * @param Integer $index
     * @return Integer
     */
    function get($index)
    {
        if($index < $this->length){

            if($index == 0){
                return $this->head->data;
            }else{
                $current = $this->head;

                for($i=0; $i < $index; $i++)
                    $current = $current->next;
    
                return $current->data;
            }
        }

        return -1;
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtHead($val)
    {
        $newElement = new Node($val);

        if($this->length == 0){
            $this->head = $this->last = $newElement;
            $newElement->next = Null;
        }else{
            $newElement->next = $this->head;
            $this->head = $newElement;
        }

        $this->length++;
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtTail($val)
    {
        $newElement = new Node($val);

        if ($this->length == 0) {
            $this->head = $this->last = $newElement;
            $newElement->next = Null;
        } else {
            $this->last->next = $newElement;
            $newElement->next = Null;
            $this->last = $newElement;
        }

        $this->length++;
    }

    /**
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function addAtIndex($index, $val)
    {
        if($index <= $this->length){

            if ($index == 0) {
                $this->addAtHead($val);
            }elseif($index == $this->length){
                $this->addAtTail($val);
            }else{

                $current = $this->head;
                $pre = Null;

                for($i=0; $i < $index; $i++){
                    $pre = $current;
                    $current = $current->next;
                }

                $newElement = New Node($val);
                $newElement->next = $current;
                $pre->next = $newElement;
                $this->length++;
            }
        }
    }

    /**
     * @param Integer $index
     * @return NULL
     */
    function deleteAtIndex($index)
    {
        if ($this->length > 0 && $index < $this->length){

            if($index == 0 && $this->length == 1){
                $this->head = $this->last = Null;
            }elseif($index == 0){
                $this->head = $this->head->next;
            }else{

                $current = $this->head;
                $pre = Null;

                for($i=0; $i< $index; $i++){
                    $pre = $current;
                    $current = $current->next;
                }

                if($current == $this->last){
                    $pre->next = Null;
                    $this->last = $pre;
                }else{
                    $pre->next = $current->next;
                }

            }

            $this->length--;
        }
    }   
}


//   Your MyLinkedList object will be instantiated and called as such:

$obj = new MyLinkedList();
$obj->addAtHead(7);
$obj->addAtHead(2);
$obj->addAtHead(1);
$obj->addAtIndex(3,0);
$obj->deleteAtIndex(2);
$obj->addAtHead(6);
$obj->addAtTail(4);
echo $obj->get(4);
$obj->addAtHead(4);
$obj->addAtIndex(5,0);
$obj->addAtHead(6);
