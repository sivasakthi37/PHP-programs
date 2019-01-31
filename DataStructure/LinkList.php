<?php

class node
{
    public $data;
    public $next;
    /** constructor to initialize the istance variable.. */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
/**
 * @ description : Linklist opertaions..
 */
class LinkList
{
    public $head;
    private static $size = 0;
    /**
     * @ description : add function to add the data in linklist..
     */
    function add($data)
    {
        if ($this->head == null) {
            $this->head = new node($data);
        } else {
            /** else assign new node as head */
            $temp = $this->head;
            /**traverse until node is not null */
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            /**assign last node next is new node */
            $temp->next = new node($data);

        }
        /** increment size  */
        self::$size++;
    }
    /**
     * @ description :display function is used to display the data in linklist..
     */
    function display()
    {
        $temp = $this->head;

        while ($temp != null) {

            echo $temp->data . " ";
            $temp = $temp->next;
        }
    }
    /**
     * @ description : search the element in the linklist..
     */
    public function search($data)
    {
        $current = $this->head;
       // echo "hai hellow";
        /**traverse the node until not null and data is equal */
        while ($current != null) {
            if (($current->data) == $data) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }
    /**
     * @ description :remove the element from the linklist..
     */
    public function remove($key)
    {
        /**assign current and prev as head */
        $current = $previous = $this->head;

        /**traverse until data is not equal to key */
        while ($current->data != $key) {
            $previous = $current;
            $current = $current->next;
        }
        if ($current == null) {
            return;
        }
        /** For the first QNode*/
        /**if itis head then move head to next node  */
        if ($current == $previous) {
            $this->head = $current->next;
        }
        /** unlink the node present between current and prev */
        $previous->next = $current->next;
        /**decrement size */
        self::$size--;
    }
     /**
     * @description :this method is used to sort the element in the linklist
     */
    function sort() {
        //console.log("sorted enter ");
        //  var temp2 = null;
        do {
            $swapped = 0;
             $t = $this->head;
            while ($t->next != null) {

                if ($t->next->data < $t->data) {

                     $neww = $t->next->data;
                    $t->next->data = $t->data;
                    $t->data = $neww;
                    $swapped = 1;
                }
                $t = $t->next;
            }

        } while ($swapped);
    }
    /**
     * @ description :get the data from the linklist and return the data..
     */
    public function getData()
    {
        $str = "";

        $current = $this->head;
        while ($current != null) {
            $str = $str . $current->data . " ";
            $current = $current->next;
        }
        return $str;
    }
}


?>