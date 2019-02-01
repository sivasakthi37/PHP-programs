<?php

/******************************************************************************
 *  Execution       :   1. default node         cmd> node regex.js 
 *               
 * 
 *  Purpose         :regex function is used to replace the perticular string.
 * 
 *  @description    
 *  @file           : regex.js
 *  @overview       :regex function is used to replace the perticular string..
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 31-01-2019
 *
 ******************************************************************************/

/**  regex function is used to replace the perticular string.*/
function regex()
{
    try {
        $str = "Hello <<name>>, We have your full
name as <<full name>> in our system. your contact number is  91-xxxxxxxxxx 
Please,let us know in case of any clarification Thank you BridgeLabz xx/xx/xxxx";



        echo "Enter the name \n";

        fscanf(STDIN, "%s", $name);
        if (is_numeric($name)) {
            throw new Exception("PLZ ENTER VALID NAME \n");
        }
        /**
         * @description :Replace the Name using preg_replace function...
         */
        $str = preg_replace("/<{2}\w+>{2}/ ", $name, $str);
        echo "Enter full name \n";
        fscanf(STDIN, "%s", $fName);
        if (is_numeric($fName)) {
            throw new Exception("PLZ ENTER VALID FULLNAME \n");

        }
        /**
         * @description :Replace the Full Name using preg_replace function...
         */
        $str = preg_replace("/<{2}\w+\s\w+>{2}/", $fName, $str);
        echo "Enter phone number \n";
        fscanf(STDIN, "%s", $phNo);

        if (strlen($phNo) < 10 || strlen($phNo) > 10) {
            throw new Exception("Enter 10 digit number\n");
        }
        /**
         * @description :Replace the PH number using preg_replace function...
         */
        $str = preg_replace("/\d{2}\-x+/", $phNo, $str);
        /**  
         * @description :Get the date from the system..
         */
        $date = date("d/m/y");
        /**  
         * @description :Replace data..
         */
        $str = preg_replace("/x*\/x*\/x*/", $date, $str);
        echo "\n";
        echo $str . "\n";
    } catch (Exception $e) {
        echo $e->getMessage();
        regex();
    }
}
regex();
?>