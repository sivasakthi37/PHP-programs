<?php 
/******************************************************************************
 *  Execution       :   1. default node         cmd> php ordedlist.php 
 *                     
 *  Purpose         : Read .a List of Numbers from a file and arrange it ascending Order in a Linked List. Take user input for a number, if found then pop the number out of the list else insert the number in appropriate position.
 * 
 *  @description    
 * 
 *  @file           : ordedlist.php
 *  @overview       : using linklist we perfoming this operation..
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 31-01-2019
 ******************************************************************************/


require("/home/brideit/Documents/PhP/DataStructure/LinkList.php");
/** 
 * @ description :perfoming orded list operation... 
 * */
function ordered()
{

    try{
    $list = new LinkList;// call the LinkList class..
/** 
         * @description :get the input from the input from file..
         */
    $file = fopen("/home/brideit/Documents/PhP/DataStructure/numbers.txt", "r");


    $filestring = fgets($file);

   // echo $filestring . "\n";

    $spl = explode(" ", $filestring);// split the sytring into array..
    $n = count($spl);

    for ($i = 0; $i < $n; $i++) {
        /** add element in linklist . */
        $list->add($spl[$i]);
    }
    /** display  the linklist element.. */
    $list->display();
/** get the input from the user */
    echo "\n Enter the search number \n";
    fscanf(STDIN, "%d \n", $num);
     /** validation.. */
    if (!is_numeric($num)) {
        throw new Exception("PLZ ENTER VALID INPUT \n", 1);

    }

    if ($list->search($num)) {
        $list->remove($num);
        echo "SUCESSFULLY DELETED..";
         /** display  the linklist element.. */
        $list->display();
          /** get  the linklist element.. */
        $getdata = $list->getData();
        /** 
             * @description :write the content  to file..
             */
        $fileo = fopen("/home/brideit/Documents/PhP/DataStructure/numbers.txt", "w");
        fwrite($fileo, $getdata);
        fclose($fileo);

    } else {
        $list->add($num);
        $list->sort();
        echo "..ADDED.. ";
         /** display  the linklist element.. */
        $list->display();
          /** get  the linklist element.. */
        $getdata = $list->getData();
        /** 
             * @description :write the content  to file..
             */
        $fileo = fopen("/home/brideit/Documents/PhP/DataStructure/numbers.txt", "w");
        fwrite($fileo, $getdata);
        fclose($fileo);

    }
    
}
catch(Exception $err){


    echo "ERROR :".$err->getMessage();
}
// $list->add("3");
// $list->add("34");
// $list->add("2");
// $list->add("1");
// $list->add("0");
// $list->display();
// $list->sort();
// $list->display();
}
ordered();
?>