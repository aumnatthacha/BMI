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
    <form method="POST" action="/">
        <label for="weight">Weight (kg):</label>
        <input type="text" name="weight" id="weight" required>

        <label for="height">Height (cm):</label>
        <input type="text" name="height" id="height" required>

        <button type="submit"><b>Calculate BMI</button>
        <?php
        include_once "./HealthAnalyzer.php";
        include_once "./Bmilndexer.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST["weight"];
            $height = $_POST["height"];
            $healthAnalyzer = new HealthAnalyzer();
            $bmilndexer = new Bmilndexer();
            // $roundedBMI = number_format($bmi, 2);
            echo "<p class='text'> BMI =" . $healthAnalyzer->Analyzer($height, $weight) . "</p>";
            echo "<p class='text'> รูปร่าง =" . number_format($bmilndexer->calbmi($height, $weight), 2) . "</p>";

            // $healthAnalyzer = new HealthAnalyzer();
            // $bmilndexer = new Bmilndexer();
            // $healthAnalyzer->Analyzer(4,5);
            // echo $bmilndexer->calbmi(165,45);

        }
        ?>

    </form>
</body>

</html>