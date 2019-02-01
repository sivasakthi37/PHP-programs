<?php
/******************************************************************************
 *  Execution       :   1. default node         cmd> php prime1to1000.php 
 *                     
 *  Purpose         : TO find prime between 1 to 1000 prime number
 * 
 *  @description    
 * 
 *  @file           : prime1to1000.php
 *  @overview       : TO find prime between 1 to 1000 prime number
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 29-01-2019
 ******************************************************************************/
require("/home/brideit/Documents/PhP/utility/utility.php");
//call utility class from utility file..
$utility = new utility;
//$res=$utility->prime(7);

echo "YOUR PRIME NUMBERS BETWEEN 1 TO 1000 \n";
 for ($i = 2; $i < 1000; $i++) {

    if ($utility->prime($i)) // pass the value to prime function in utility file..
    {
        echo $i." ";
    }
 }
?>
