<?php

/******************************************************************************
 *  Execution       :   1. default node         cmd> php bubblesort.php 
 *                     
 *  Purpose         : TO sort the value element in the array using bubble sort..
 * 
 *  @description    
 * 
 *  @file           : bubblesort.php
 *  @overview       :TO sort the value element in the array using bubble sort..
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 29-01-2019
 ******************************************************************************/
require("/home/brideit/Documents/PhP/utility/utility.php");
function bubble()
{
    try {
        echo "Enter the array Size \n";
        fscanf(STDIN, "%s\n", $size);// get size from the user..
        if (!is_numeric($size)) {
            throw new Exception(" PLZ ENTER VALID NUMBER \n");
        }
        $arr = [];// declare the array...
        echo "Enter the value of array \n";
//$d=trim((fgets(STDIN)));
//echo $d."\n ";
        /**
         * @description :using this for loop get input number from the user for array
         */
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = trim((fgets(STDIN)));
            if (!is_numeric($arr[$i])) {
                throw new Exception(" PLZ ENTER VALID NUMBER \n");
            }
        }
        /**
         * @description :call utility class from utility file..
         */
        $utility = new utility();
        /**
         * @description :call the bubble sort method to sort the numbers..
         */
        $arr1 = $utility->bubblesort($arr);

        echo "YOUR SORTING NUMBER \n";
         /**
         * @description :Using this for loop print the sorted element..
         */
        for ($i = 0; $i < $size; $i++) {
            echo $arr1[$i]."\n";

        }
        /**
         * @description :use this catch block to catch the message from the exception..
         */
    } catch (Exception $err) {
        
        echo "ERROR :".$err->getMessage()."\n";

    }

}
bubble();
?>