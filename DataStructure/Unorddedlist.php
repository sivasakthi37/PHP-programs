<?php 
/******************************************************************************
 *  Execution       :   1. default node         cmd> php Unorddedlist.php 
 *                     
 *  Purpose         : Read the Text from a file, split it into words and arrange it as Linked List. Take a user input to search a Word in the List. If the Word is not found then add it to the list, and if it found then remove the word from the List. In the end save the list into a file
 * 
 *  @description    
 * 
 *  @file           : Unorddedlist.php
 *  @overview       : using linklist we perfoming this operation..
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 30-01-2019
 ******************************************************************************/

require("/home/brideit/Documents/PhP/DataStructure/LinkList.php");
/**   
 * @ description :perfoming unorded operation...
 */
function Unorddedlist()
{
    try {
        $LinkList = new LinkList; // call the LinkList class..
        $resource = "/home/brideit/Documents/PhP/DataStructure/Unorededlist.txt";// store the path in th eresourse variable.
        /** 
         * @description :get the input from the input from file..
         */
        $file = fopen($resource, "r");
        $filestring = fgets($file);
    //echo $filestring;
        $sp = explode(" ", $filestring);// split the sytring into array..

        for ($i = 0; $i < count($sp); $i++) {
            $LinkList->add($sp[$i]);
        }
        /** display  the linklist element.. */
        $LinkList->display();

        echo "\n ENTER THE WORD YOU WANT TO SEARCH.. ";
        /** get the input from the user */
        fscanf(STDIN, "%s\n", $word);
        /** validation.. */
        if (is_numeric($word)) {
            throw new Exception("PLZ ENTER VALID INPUT ", 1);

        }
        if ($LinkList->search($word)) {
            $LinkList->remove($word);
        } else {

            $LinkList->add($word);
            echo "FILE IS UPDATAED \n";

        }
        /** display  the linklist element.. */
        $LinkList->display();
        /** get  the linklist element.. */
        $getdata = $LinkList->getData();
        /** 
         * @description :write the content  to file..
         */
        $file1 = fopen($resource, "w");
        fwrite($file1, $getdata);
        fclose($file1);
    } catch (Exception $err) {

        echo "ERROR ".$err->getMessage();
        Unorddedlist();
    }
// $file=fgets($resource,"r");
// echo $file;
    // $LinkList->add("1");
    // $LinkList->add("2");
    // $LinkList->add("3");
    
    // $LinkList->display();
    // $res=$LinkList->search("4");
    // echo $res;
    // $LinkList->remove("3");
    // $LinkList->display();
}
Unorddedlist();

?>