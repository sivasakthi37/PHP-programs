<?php
/******************************************************************************                 
 *  Purpose         : All the business logic is here....
 * 
 *  @description    
 * 
 *  @file           : utility.php
 *  @overview       :To handle all business logic ..
 *  @author         : sivasakthi
 *  @version        : 1.0
 *  @since          : 28-01-2019
 ******************************************************************************/
class utility
{
    /**
     * @ description :This function is used to find the two string is anagram are not...
     */
    function anagram($string1, $string2)
    {

        $str1 = strlen($string1);// find the length of the first string 
        $str2 = strlen($string2);// find the length of the second string string
//echo $str1."\n";
        if ($str1 != $str2) {
            return false;
        }
        /**
         * @description : using the split method split the string into character
         */
        $ch1 = str_split($string1);
        $ch2 = str_split($string2);
 // sort the charactor...
        sort($ch1);
        sort($ch2);
 // using implode method convert the charector array to string... 
        $sch1 = implode($ch1);
        $sch2 = implode($ch2);
// using theb strcmp="String compare" method is used to compare the string is equal or not..
        if (strcmp($sch1, $sch2) == 0) {
            return true;
        }
    } 
//echo $ch1;
//  for($i=0;$i<$str1;$i++){
   //   echo $ch1[$i]."\n";
 //}
//  $ch2=str_split($string2);
//  for($i=0;$i<$str2;$i++){
//     echo $ch2[$i]."\n";
// }
 
// $sort1=sort($car);
// $n=count($sort1);
// for($i=0;$i<$n;$i++){
//    echo $sort1[$i]."\n";
//}
// $sort2=sort($ch2);
// echo $sort1.$sort2;
//echo $ch1==$ch2;
 
//  //function sort1($string1){

// $sortstr=explode(" ",$string1);
// $n=strlen($string1);
// //var ch = st.split('');

// }

/* $sortstr1=explode(" ",$string1);
//  foreach($sortstr1 as $var1) 
//      //echo $var1;
// $sortstr2=explode(" ",$string2);
//  foreach($sortstr2 as $var2) 
//     // echo $var2;

// if (strcmp($var1,$var2==1)) {
//     return true;
// }
//  if(strcmp($string1,$string2)==0)
//  {
//      return true;
//  }
//  else{
//      return false;
//  }
//    echo strlen("$string1");  



// public static function is_anagram($string_1, $string_2) 
//     { 
//         if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
//         return 'Anagram'; 
//     else
//         return 'Not a anagram';	 */

    /**
     * @ Description :This function is used to check your number is prime or not...   
     */
    function prime($n)
    {
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {

                return false;

            }
        }
        return true;
    }
    /**
     * @description :bubblesort  function is used to sort the numbers..
     */
    function bubblesort($arr)
    {
        $n = count($arr);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {

                if ($arr[$i] > $arr[$j]) {
                    $temp;
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }

            }
        }
        return $arr;
    }
    /**
     * @description :CellFah is used to convert Celsius to Fahrenheit..                                                               ..
     */
    function CelFah()
    {
        try {
            echo "Enter Celsius value to convert Fahrenheit :";
            fscanf(STDIN, "%s\n", $cel);// get the input from the user...
            //validation..
            if (!is_numeric($cel)) {
                throw new Exception("PLZ ENTER VALID INPUT \n");
            }
            $F = ($cel * 9 / 5) + 32;

            echo "Your  Fahrenheit value is " . $F . "\n";
        } catch (Exception $err) {
            echo "ERROR : " . $err->getMessage() . "\n";
            //  $utility=new utility; 
            //  $utility->CelFah();
            $this->CelFah();
        }
    }
    /**
     * @description :fahCel is used to convert Fahrenheit to Celsius..                                                               ..
     */
    function fahCel()
    {
        try {
            echo "Enter Fahrenheit value to convert Celsius :";
            fscanf(STDIN, "%s\n", $fah);// get the input from the user...
            //validation..
            if (!is_numeric($fah)) {
                throw new Exception("PLZ ENTER VALID INPUT \n");
            }
            $C = ($fah - 32) * 5 / 9;
            echo "Your celsius value is  " . $C . "\n";
        } catch (Exception $err) {
            echo "ERROR : " . $err->getMessage()."\n";
            $this->fahCel();
            // $utility=new utility; 
            // $utility->fahCel();
        }

    }
    /**
     * @description :monthpay method is used to find the monthly payment of loan amount..                                                               ..
     */
    function monthpay($Y, $P, $R)
    {
        //echo "hai hellow";
        $n = 12 * $Y;
        $r = $R / (12 * 100);
    // d = Math.pow((1 + r), (-n));
    // var payment = (p * r) / (1 - (d));
        $d = pow((1 + $r), (-$n));
        $payment = ($P * $r) / (1 - ($d));// formula for monthly payment..
        echo "Your Monthly payment is :".$payment."\n";
    }
}
?>