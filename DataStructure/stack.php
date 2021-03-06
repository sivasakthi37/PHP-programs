<?php

class Node
{
    public $next;
    public $data;
    /**create new node with data */
    function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
class Stack
{
    public $top;
     public static $size = 0;
    /**add the elements to stack */
    public function push($item)
    {
        /**create newnode with data */
        $new_node = new Node($item);

        /**if top is null then newnode is top */
        if ($this->top == null) {
            $this->top = $new_node;
        } else {
            /**else add at starting  */
            $new_node->next = $this->top;
            $this->top = $new_node;
        }
        /**inc size */
          self::$size++; 
        //$this->size++;
    }
    public function display()
    {
        /**assign current as top */
        $current = $this->top;

        /**top is null then stack is empty */
        if ($current == null) {
            echo "stack is empty\n";
            exit;
        }
        /**traverse the elements unti it is null */
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
    public function size(){
        
        return self::$size;
    }
    public function pop(){
        /**if top is null stack underflow */
        if($this->top == null){ 
            echo "stack underflow \n";
            return ;
        }
        $val = $this->top->data;
        /** move top to next node */
        $this->top = $this->top->next; 
        self::$size--;
        
        /**return value of removed node */
        return $val; 
    }
    /**
     * @description :This function is used to check the linklist is empty or not...
     */
    public function isempty(){

        if(self::$size==0){
            return true;
        }
        else{
            return false;
        }
        
    }


}

?>
