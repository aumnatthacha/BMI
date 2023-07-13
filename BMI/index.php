<?php
require_once 'checkBody.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap');
    </style>
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

        <button type="submit"><b>Calculate BMI</button>
        <?php
        if (isset($bmi)) {
            echo "<p><b>Your weight : {$weight} kg</p>";
            echo "<p><b>Your height : {$height} cm</p>";
            echo "<p><b>BMI ของคุณคือ : " . number_format($bmi, 2);
            echo "<p><b>ค่าร่างกาย : $bodyStatus </p>";

            // echo $isNormalWeight ? 'น้ำหนักของคุณอยู่ในเกณฑ์ปกติ' : 'น้ำหนักของคุณไม่อยู่ในเกณฑ์ปกติ';
        }
        ?>

    </form>
</body>

</html>