<?php
$balance = 1000;
$transfer = 1000;

echo"เงินในบัญชี = ".$balance. "<br>";
if ($transfer<=$balance) {
    echo"สามารถกดเงินได้ <br>";
    $balance-= $transfer;    //คำนวณยอดคงเหลือ
    echo"ยอดคงเหลือ = ".$balance."<br>";
}
echo "คืนบัตรกดเงิน";

?>