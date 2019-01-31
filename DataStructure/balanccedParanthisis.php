<?php
/******************************************************************************
 *  Execution       :   1. default node         cmd> node balanccedParanthisis.php 
 *                    
 * 
 *  Purpose         :TO check Your paranthisis are equal or not..

 * 
 *  @description    :This  function is used to check Your paranthisis are equal or not..

 * 
 *  @file           : balanccedParanthisis.js
 *  @overview       : To find your paranthisis is balanced or not..
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 30-01-2019
 *
 ******************************************************************************/
require("/home/brideit/Documents/PhP/DataStructure/stack.php");
/**
 *  @description    :This  function is used to check Your paranthisis are equal or not..
 */
function balanced()
{

    $res = balpar();// call the balpar function from this function
    if ($res)// if res return true your paranthisis is balanced.. 
    {
        echo "YOUR EXPRESSION IS BALANCED... \n";

    }
    else{
        echo "YOUR EXPRESSION IS NOT BALANCED... \n";
    }
}
balanced();
/**
 *  @description    :This  function is used to check Your paranthisis are equal or not..
 */
function balpar()
{
    try{
    $utility = new stack;
    echo " ENTER YOUR ARITHMATIC EXPRESSION :";
    fscanf(STDIN, "%s\n", $ex);// This is used to get the input from the user..
    $n = strlen($ex);// to find the length of the string..
    $sp = str_split($ex);// split the string into array acces one by one element..
    // for ($i = 0; $i < $n; $i++) {
    //     if ($sp[$i] != '(' || $sp[$i] != '{' || $sp[$i] != '[' || ($sp[$i] != ')' || $sp[$i] != '}' || $sp[$i] != ']') ) {
    //     throw new Exception("PLZ ENTER VALID INPUT :" );
    //     }
    // }
    for ($i = 0; $i < $n; $i++) {
        if ($sp[$i] == '(' || $sp[$i] == '{' || $sp[$i] == '[') {
            $utility->push($sp[$i]); 
            //$utility->display();
        } else{
            switch ($sp[$i]) {
                case ')':
                   // echo "POP ELEMENT :". $utility->pop();
                    if ($utility->pop() != '(') {
                        if ($utility->isempty()) {
                            return false;
                        }
                      //   echo "SWITCH :".$utility->display();
                        return false;
                    }
                    break;
                    case ']':
                   // echo "POP ELEMENT :". $utility->pop();
                    if ($utility->pop() != '[') {
                        if ($utility->isempty()) {
                          
                           return false;
                        }
                      //   echo "SWITCH :".$utility->display();
                        return false;
                    }
                    break;
                    case '}':
                   // echo "POP ELEMENT :". $utility->pop();
                    if ($utility->pop() != '{') {
                        if ($utility->isempty()) {
                          
                           return false;
                        }
                      //   echo "SWITCH :".$utility->display();
                        return false;
                    }
                    break;

                default:
    
                    break;
            }


        }
    }
    if ($utility->isempty()) {
        return true;
    } else {
        return false;
    }
}
catch(Exception $err){
    echo "ERROR :".$err->getMessage()."\n";

  //  balpar();
}

}
   



   
// }

//      $utility->push("1");
//      $utility->push("2");
//      $utility->push("3");
//      $utility->push("4");
//      $utility->display();
     
//    echo "POP ELEMENT :".$utility->pop();
// $utility->display();


    // $d = 23;
    // $utility->push($d);

    // $utility->display();
    // $res = $utility->size();
    // echo $res;




?>