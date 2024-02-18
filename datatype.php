<?php
$price=50; //integer
$score=90.58; // double
$name = "somsri studio"; //string

$isvaild=false;

$price = $price+100; //50+100; =>price

echo $name."<br>";
echo $isvaild."<br>";
echo $price."<br>";
echo $score."<br>";

echo "<hr>";

echo gettype($name)."<br>";
echo gettype($isvaild)."<br>";
echo gettype($score)."<br>";
echo gettype($price)."<br>";

echo"<hr>";
echo "ก่อนเปลี่ยน = ".gettype($score)."<br>";
settype($score,"integer");
echo "หลังเปลี่ยน = ".gettype($score)."<br>";

?>