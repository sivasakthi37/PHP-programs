<?php
/******************************************************************************
 *  Execution       :   1. default node         cmd> node deckofcards.js 
 *                      2. if nodemon installed cmd> nodemon deckofcards.js
 * 
 *  Purpose         : deckofcards is used  shuffle the playing cards ..
 * 
 *  @description    
 * 
 *  @file           : deckofcards.js
 *  @overview       :deckofcards is used  shuffle the playing cards ..
 *  @author         : sivasakthi.
 *  @version        : 1.0
 *  @since          : 1-02-2019
 *
 ******************************************************************************/
//const util = require('util');
function deck2D()
{
    /**
     * accessing the queue  from there respective path
     */
    /**
     * declaring varaibles and accessing queue
     */
    $suit = array("♣️", "🔸", "❤️", "♠️");
    $rank = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "jack", "queen", "king", "ace");
    /**
     * declaring array and calculating the number of cards and pushing into array
     */
    $deck = [];
    $n = count($suit) * count($rank);
    $k = 0;
    /**
     * declaring array and calculating the number of cards and pushing into array
     */
    for ($i = 0; $i < count($suit); $i++) {
        //$iarr = array();
        for ($j = 0; $j < count($rank); $j++) {

            $deck[$k] = $rank[$j] . "" . $suit[$i] . " ";
            $k++;
        }
       // array_push($deck, $iarr);
    }
    /**
     * generating random method for shuffling cards containig in array
     */
    for ($i = 0; $i < $n; $i++) {
        $random = rand(0, 51);
        $temp = $deck[$i];
        $deck[$i] = $deck[$random];
        $deck[$random] = $temp;
    }
    /**
     * adding the set of cards though for loop by range 
     */
    // $arr = array();
    
    //      $x=0;
    //      $y=9;
    // for ( $i = 0; $i < 4; $i ++) {
    //     $arr->array_push .push([]);
    //         for ($j = 0; $j < 9; $j ++) {
    //         arr[i][j] = deck[j + x];
    //     }
    //     x = x + 9;
    // }

    $x = 0;
    $y = 9;
    $arr = array();
       // echo "enter valus"."\n";
    for ($i = 0; $i < 4; $i++) {
        $iArr = array();
        for ($j = 0; $j < 9; $j++) {
            $iArr[$j] = $deck[$j + $x];
        }
        array_push($arr, $iArr);
        $x = $x + 9;
    }

    /**
     * printing the result containing in array
     */
    for ($index = 0; $index < count($arr); $index++) {
        $person = $index + 1;
        echo "[ person " . $person . "]-[";
        for ($index1 = 0; $index1 < 9; $index1++) {
            echo $arr[$index][$index1];

        }
        echo "]\n";

    }
}
deck2D();

?>