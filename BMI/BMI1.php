<?php
class BMI
{
    private $height;
    private $weight;
    private $bmi;

    public function set_height($height)
    {
        $this->height = $height;
    }
    public function get_height()
    {
        return $this->height;
    }
    public function set_weight($weight)
    {
        $this->weight = $weight;
    }
    public function get_weight()
    {
        return $this->weight;
    }
    public function set_bmi($bmi)
    {
        $this->bmi = $bmi;
    }
    public function get_bmi()
    {
        return $this->bmi;
    }
    public function calculateBMI()
    {
        $bmi = $this->weight / (($this->height / 100) ** 2);
        return $bmi;
    }
    public function isNormalWeight()
    {
        if ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            return true;
        } else {
            return false;
        }
    }
    // public function BodyMassIndexBMI()
    // {
    //     $bmi= $this-> bmi();
    //     if ($bmi <= 18.5){
    //         return "ผอมมากนาาา";
    //     }elseif($bmi >= 18.6 && $bmi <= 24.0){
    //         return "น้ำหนักปกติ";
    //     }elseif($bmi >= 25.0 && $bmi <= 29.9){
    //         return "อ้วน";
    //     }else{
    //         return "อ้วนมาก";
    //     }
    // }
}

if (
    isset($_POST['weight']) &&
    isset($_POST['height'])
) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // สร้าง instance ของคลาส MBI 
    $calculator = new BMI();
    $calculator->set_weight($weight);
    $calculator->set_height($height);
    $bmi = $calculator->calculateBMI();
    $isNormalWeight = $calculator->isNormalWeight();

    // แสดงผลลัพธ์
    // echo "<p>Your weight: {$weight} kg</p>";
    // echo "<p>Your height: {$height} cm</p>";
    // echo "<p>Your BMI: {$bmi}</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
</head>

<body>
    <h1>BMI Calculator</h1>
    <form method="POST" action="">
        <label for="weight">Weight (kg):</label>
        <input type="text" name="weight" id="weight" required>

        <label for="height">Height (cm):</label>
        <input type="text" name="height" id="height" required>

        <button type="submit">Calculate BMI</button>
        <?php
        if (isset($bmi)) {
            echo "<p>Your weight: {$weight} kg</p>";
            echo "<p>Your height: {$height} cm</p>";
            echo "<p>Your BMI: {$bmi}</p>";

            echo $isNormalWeight ? 'น้ำหนักของคุณอยู่ในเกณฑ์ปกติ' : 'น้ำหนักของคุณไม่อยู่ในเกณฑ์ปกติ';

            // echo "<p>Your isNormalWeight: {$isNormalWeight} น้ำหนักของคุณอยู่ในเกณฑ์ปกติ : น้ำหนักของคุณไม่อยู่ในเกณฑ์ปกติ";
        }
        ?>
    </form>
</body>

</html>