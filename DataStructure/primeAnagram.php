<?php
/***************************************************************************** 
* 
*  Purpose         : Find primenumber which are the anagram in range 0-1000..
* 
*  @description    
* 
*  @file           : primeAnagram.js
*  @overview       : primes function to Find primenumber which are the anagram in range of 0-1000..
*  @author         : sivasakthi
*  @version        : 1.0
*  @since          : 17-01-2019
*
******************************************************************************/
require("/home/brideit/Documents/PhP/utility/utility.php");

$util = new utility;
$f = 0;
$l = 100;
/**
     * @description : This loop is used to find the primenumber whitch are Anagram in the range of 1000;
     */
for ($i = 0; $i < 10; $i++) {
    $res = $util->findAnaPrime($f, $l);
    $n = count($res);
    //echo "count ".$n."\n";
    echo "[".$f."-".$l."]"." - [";
    /** if the element is no element in the range it show message */
    if($n==0){
       echo "NO ELEMENT IN THIS RANGE ]\n";

    }
    else{
        for ($j= 0; $j < $n; $j++) {
           
        echo $res[$j]." ";
        }
        echo "]\n";
    }
    $f=$f+100;
    $l=$l+100;

}




?>
