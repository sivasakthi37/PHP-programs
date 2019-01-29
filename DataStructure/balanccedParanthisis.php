<?php
require("/home/brideit/Documents/PhP/DataStructure/stack.php");
function balanced(){
$utility=new stack;
$d=23;
$utility->push($d);
$res=$utility->tostring();    
echo $res;


}
balanced();

?>