<?php
$balance = 1000;
$withdraw = 500;


$a = $withdraw<=$balance;  // ผลการเปรียบเทียบจำนวนเงิน
$b = $withdraw>=0;  // เงินที่ถอนต้องมีค่ามากกว่า 0


echo"เงินในบัญชี = ".$balance. "<br>";
echo"จำนวนเงินที่ถอน = ".$withdraw. "<br>";
echo "<hr>";
/*
if ($a && $b) {
    echo"สามารถกดเงินได้ <br>";
    $balance-= $withdraw;    //คำนวณยอดคงเหลือ
    echo"ยอดคงเหลือ = ".$balance."<br>";
}
else{
    echo "ยอดเงินคงเหลือไม่พอ <br>";
}
*/

if (!($withdraw<=$balance) || $withdraw>=0) {
    echo"สามารถกดเงินได้ <br>";
    $balance-= $withdraw;    //คำนวณยอดคงเหลือ
    echo"ยอดคงเหลือ = ".$balance."<br>";
}
else{
    echo "ยอดเงินคงเหลือไม่พอ <br>";
}

echo "คืนบัตรกดเงิน <br>";

echo "<hr>";

//พื้นที่ = กว้าง x ยาว
$width = 30;
$height = 30;

if($width>0 && $height> 0){
    $area = $width * $height;
    echo"พื้นที่สี่เหลี่ยม = ".$area."ตารางนิ้ว<br>";
}
else{
    echo "ต้องป้อนตัวเลข ความกว้างและความสูง มากกว่า 0";
}

echo "<hr>";
/*
คะแนน (score)

มากกว่า 80 => A
มากกว่า 70 => B
มากกว่า 60 => C
มากกว่า 50 => D
อื่นๆ => F
*/ 
echo "คะแนน (score) <br>"
."มากกว่า 80 => A <br>"
."มากกว่า 70 => B <br>"
."มากกว่า 60 => C <br>"
."มากกว่า 50 => D <br>"
."อื่นๆ => F <br>";

$score=49.5;
$grade = "";

if($score>=80){
    $grade = "A";
}
else if($score>= 70){
    $grade = "B";
}
else if($score>= 60){
    $grade = "C";
}
else if($score>= 50){
    $grade = "D";
}
else {
    $grade = "F";
}
echo "คะแนนของคุณ คือ".$score."เกรดที่ได้".$grade ."<br>";

echo "<hr>";


?>