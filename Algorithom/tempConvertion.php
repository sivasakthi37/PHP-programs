<?php

/******************************************************************************
 *  Execution       :   1. default node         cmd> php tempConvertion.php 
 *                     
 *  Purpose         : To convert your Celsius to Fahrenheit and Fahrenheit to Celsius..
 * 
 *  @description    
 * 
 *  @file           :tempConvertion.php
 *  @overview       :To convert your Celsius to Fahrenheit and Fahrenheit to Celsius....
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 29-01-2019
 ******************************************************************************/
require("/home/brideit/Documents/PhP/utility/utility.php");
/**
 * @ description : This method is used to convert your Celsius to Fahrenheit and Fahrenheit to Celsius..
 */
function tempconv()
{
    try {
        echo "press 1==>Celsius to Fahrenheit :\npress 2==>Fahrenheit to Celsius : \npress 3==>EXIT\n";
        echo "ENTER YOUR CHOICE ";
        fscanf(STDIN, "%s\n", $choice);
        /**
         * Validation.. 
         */
        if (!is_numeric($choice)) {
            throw new Exception("PLZ ENTER VALID INPUT \n");
        }
        if ($choice < 1 || $choice > 3) {
            throw new Exception("PLZ ENTER WITH IN THE RANGE 1 to 3 \n");

        }
        /**
         * @description :call the utility class from utility file..
         */
        $utility = new utility;

        switch ($choice) {
            case '1':

                $utility->CelFah();// calling cellFah function in utility class..
                break;

            case '2':
                $utility->fahCel();// calling fahCel function in utility class.
                break;
            case '3':
                exit();
                break;
        }
    } catch (Exception $err)// handle the exception.. 
    {
        echo "ERROR :".$err->getMessage() . "\n";
        tempconv();
    }
}
tempconv();

?>