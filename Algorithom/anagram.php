<?php

/******************************************************************************
 *  Execution       :   1. default node         cmd> php anagram.php 
 *                     
 *  Purpose         : Determines whether a number `input String `is Anagram or not .
 * 
 *  @description    
 * 
 *  @file           : anagram.php
 *  @overview       : Anagram module to check if String is Anagram or not.
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 28-01-2019
 ******************************************************************************/

require("/home/brideit/Documents/PhP/utility/utility.php");
/**
 * @description :Anagram module to check if String is Anagram or not.
 */



function anagram1()
{
    try {
        echo "ENter your first String : ";
        fscanf(STDIN, "%s\n", $val1);// get a input from the user..

        if (is_numeric($val1)) {
            throw new Exception("PLZ ENTER VALID STRING \n");
            // echo "PLZ ENTER VALID STRING";

        }
        echo "ENter your second String :";
        fscanf(STDIN, "%s\n", $val2);// get a input from the user..
       if (is_numeric($val2)) {
            throw new Exception("PLZ ENTER VALID STRING \n");
           //echo "PLZ ENTER VALID STRING";
        }
       // $res = Utility::anagram($val1, $val2);

        $utility = new utility;
        $res = $utility->anagram($val1, $val2);
      //  echo $res;
        if ($res) {
            echo "is anagram\n";
        } else {
            echo "is not anagram\n";
        }
    } catch (Exception $err) {
        echo "ERROR :" . $err->getMessage() . "\n";
        anagram1();
    }
}
anagram1();
?>