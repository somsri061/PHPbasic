<?php
$a=500;
$b= 400;

/*
var_dump( $a == $b ); //เท่ากันไหม
var_dump( $a === $b ); //เหมือนกันไหม
var_dump( $a !== $b ); //ไม่เหมือนกันไหม
*/
$c= $a>=$b; 
var_dump( $c );
// echo "<br>ผลการเปรียบเทียบ = ".($a==$b);
// var_dump( $a != $b );
echo"<br>";
// echo "ผลการเปรียบเทียบ =".($a==$b);

var_dump( $a<=>$b );

?>