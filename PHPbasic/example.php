<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <style>
    h1 {
        text-align: center;
    }
    </style>
</head>

<body>
    <h1>PHP ร่วมกับ HTML</h1>
    <?php
    echo "Somsri Khaokrachang<br>";
    echo "<b>studio</b>";
    echo "<h1>สอน PHP เบื้องต้น</h1>";

    print("กรอกข้อมูล");
    ?>
    <form action="">
        <label for="">ชื่อ</label>
        <input type="text" name="" id="" value="<?php echo " สมชาย" ?>">
        <label for="">นามสกุล</label>
        <input type="text" name="" id="" value="<?php echo " ขาวกระจ่าง" ?>">
    </form>

</body>

</html>