<?php
require_once 'BMI1.php';

// ฟังก์ชั่นสำหรับตรวจสอบค่าร่างกาย
 function checkBodyStatus($bmi)
{
    if ($bmi < 18.5) {
        return "ผอม";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        return "ปกติ";
    } elseif ($bmi >= 25 && $bmi < 30) {
        return "ท้วม";
    } else {
        return "อ้วน";
    }
}

if (
    isset($_POST['weight']) &&
    isset($_POST['height'])
) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // สร้าง instance ของคลาส BMI 
    $calculator = new BMI();
    $calculator->set_weight($weight);
    $calculator->set_height($height);
    $bmi = $calculator->calculateBMI();
    // $isNormalWeight = $calculator->isNormalWeight();
    $bodyStatus = checkBodyStatus($bmi);
}
