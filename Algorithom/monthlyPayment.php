<?php
/******************************************************************************
 *  Execution       :   1. default node         cmd> php monthlyPayment.php 
 *                     
 *  Purpose         :To find the monthly payment of loan amount..  
 * 
 *  @description    
 * 
 *  @file           :monthlyPayment.php
 *  @overview       :To find the monthly payment of loan amount..  
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 29-01-2019
 ******************************************************************************/
require("/home/brideit/Documents/PhP/utility/utility.php");
//To find the monthly payment of loan amount..  
function pay()
{
    try {
        echo "Enter How many Years :";
        fscanf(STDIN, "%s", $Y);// get input from the user
        // validation..  
        if (!is_numeric($Y)) {
            throw new Exception("PLZ ENTER VALID INPUT \n");
        }
        if ($Y <= 0) {
            throw new Exception("PLZ ENTER ABOVE 0 \n");

        }
        echo "Enter the payment :";
        fscanf(STDIN, "%s", $P);// get input from the user 
        // validation.. 
        if (!is_numeric($P)) {
            throw new Exception("PLZ ENTER VALID INPUT \n");
        }
        if ($P <= 0) {
            throw new Exception("PLZ ENTER ABOVE 0 \n");

        }
        echo "Enter the Intrest percentage :";
        fscanf(STDIN, "%s\n", $R);
        // validation.. 
        if (!is_numeric($R)) {
            throw new Exception("PLZ ENTER VALID INPUT \n");
        }
        if ($R <= 0) {
            throw new Exception("PLZ ENTER ABOVE 0 \n");

        }
         /**
         * @description :call the utility class from utility file..
         */
        $utility = new utility;
        $utility->monthpay($Y, $P, $R);// calling monthPay function in utility class..
    }
    catch(Exception $err){
        echo "ERROR :".$err->getMessage()."\n";
        pay();
        }
}
pay();
?>
