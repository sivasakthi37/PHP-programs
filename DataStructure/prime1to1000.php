<?php
/***************************************************************************** 
* 
*  Purpose         : Find all prime number in range 0-1000.
* 
*  @description    
* 
*  @file           : prime1to1000.js
*  @overview       : prime function to Find all prime number in range 0-1000..
*  @author         : sivasakthi
*  @version        : 1.0
*  @since          : 31-01-2019..
*
******************************************************************************/
require("/home/brideit/Documents/PhP/utility/utility.php");
/**
 * @description : prime function to Find all prime number in range 0-1000..
 * 
  */
function prime()
{

    $util = new utility;
    $f = 0;
    $l = 100;
    /**
     * @description : This loop is used to find the prime number in the range of 1000;
     */
    for ($j=0; $j <10 ; $j++) { 

        $res =$util->findPrime($f, $l);
           $res1=count($res);
        // echo $res1;
        echo "[".$f."-".$l."]"."  [";
        for ($i=0; $i <$res1 ; $i++) { 
            echo $res[$i]." ";
        }
        echo "]\n";
        $f=$f+100;
        $l=$l+100;
    }
}
prime();



?>