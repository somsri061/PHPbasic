<?php
$month=1;

switch ($month) {
    case 1:echo"มกราคม";
    break;
    case 2:echo "กุมาภา";
    break;
    case 3:echo "มีนา";
    break;
    default: echo "ไม่พบเดือน";
}
echo"<br> <hr>";
/* 
5 ปี => 10%
10 ปี => 20% 
*/
$year = 20;

switch ($year) {
    case 5:
        echo "ระยะเวลากู้ = ".$year. " ปี คิดดอกเบี้ย 10%";
        break;
    case 10:
        echo "ระยะเวลากู้ = ".$year. " ปี คิดดอกเบี้ย 20%";
        break;
    default: echo "ไม่เข้าเงื่อนไขตามที่กำหนด";
}

?>