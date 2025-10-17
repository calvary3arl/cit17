<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Exercises with Forms</title>
</head>
<body>
    <h1>PHP Exercises (with User Input)</h1>

    <!-- 1. Introduce Yourself -->
    <h2>1. Introduce Yourself</h2>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        Favorite Color: <input type="text" name="color"><br>
        <input type="submit" name="intro" value="Submit">
    </form>
    <?php
    if (isset($_POST['intro'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $color = $_POST['color'];
        echo "Hi, I’m $name, I am $age years old, and my favorite color is $color.";
    }
    echo "<hr>";

    // 2. Simple Math
    ?>
    <h2>2. Simple Math</h2>
    <form method="post">
        A: <input type="number" name="a"> 
        B: <input type="number" name="b">
        <input type="submit" name="math" value="Calculate">
    </form>
    <?php
    if (isset($_POST['math'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        echo "Sum: " . ($a + $b) . "<br>";
        echo "Difference: " . ($a - $b) . "<br>";
        echo "Product: " . ($a * $b) . "<br>";
        echo "Quotient: " . ($a / $b);
    }
    echo "<hr>";

    // 3. Area and Perimeter of a Rectangle
    ?>
    <h2>3. Area and Perimeter of a Rectangle</h2>
    <form method="post">
        Length: <input type="number" name="length">
        Width: <input type="number" name="width">
        <input type="submit" name="rect" value="Compute">
    </form>
    <?php
    if (isset($_POST['rect'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
        echo "Area: $area <br>Perimeter: $perimeter";
    }
    echo "<hr>";

    // 4. Temperature Converter
    ?>
    <h2>4. Temperature Converter</h2>
    <form method="post">
        Celsius: <input type="number" name="celsius" step="any">
        <input type="submit" name="temp" value="Convert">
    </form>
    <?php
    if (isset($_POST['temp'])) {
        $c = $_POST['celsius'];
        $f = ($c * 9/5) + 32;
        echo "$c °C is equal to $f °F";
    }
    echo "<hr>";

    // 5. Swapping Variables
    ?>
    <h2>5. Swapping Variables</h2>
    <form method="post">
        X: <input type="number" name="x">
        Y: <input type="number" name="y">
        <input type="submit" name="swap" value="Swap">
    </form>
    <?php
    if (isset($_POST['swap'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $temp = $x;
        $x = $y;
        $y = $temp;
        echo "After swapping: x = $x, y = $y";
    }
    echo "<hr>";

    // 6. Salary Calculator
    ?>
    <h2>6. Salary Calculator</h2>
    <form method="post">
        Basic Salary: <input type="number" name="basic">
        Allowance: <input type="number" name="allowance">
        Deduction: <input type="number" name="deduction">
        <input type="submit" name="salary" value="Compute">
    </form>
    <?php
    if (isset($_POST['salary'])) {
        $basic = $_POST['basic'];
        $allowance = $_POST['allowance'];
        $deduction = $_POST['deduction'];
        $net = $basic + $allowance - $deduction;
        echo "Net Salary: ₱$net";
    }
    echo "<hr>";

    // 7. BMI Calculator
    ?>
    <h2>7. BMI Calculator</h2>
    <form method="post">
        Weight (kg): <input type="number" name="weight" step="any">
        Height (m): <input type="number" name="height" step="any">
        <input type="submit" name="bmi" value="Compute BMI">
    </form>
    <?php
    if (isset($_POST['bmi'])) {
        $w = $_POST['weight'];
        $h = $_POST['height'];
        $bmi = $w / ($h * $h);
        echo "Your BMI is " . round($bmi, 2);
    }
    echo "<hr>";

    // 8. String Manipulation
    ?>
    <h2>8. String Manipulation</h2>
    <form method="post">
        Enter a sentence: <input type="text" name="sentence" size="50">
        <input type="submit" name="string" value="Analyze">
    </form>
    <?php
    if (isset($_POST['string'])) {
        $sentence = $_POST['sentence'];
        echo "# of characters: " . strlen($sentence) . "<br>";
        echo "# of words: " . str_word_count($sentence) . "<br>";
        echo "Uppercase: " . strtoupper($sentence) . "<br>";
        echo "Lowercase: " . strtolower($sentence);
    }
    echo "<hr>";

    // 9. Bank Account Simulation
    ?>
    <h2>9. Bank Account Simulation</h2>
    <form method="post">
        Current Balance: <input type="number" name="balance">
        Deposit: <input type="number" name="deposit">
        Withdraw: <input type="number" name="withdraw">
        <input type="submit" name="bank" value="Update">
    </form>
    <?php
    if (isset($_POST['bank'])) {
        $bal = $_POST['balance'];
        $dep = $_POST['deposit'];
        $with = $_POST['withdraw'];
        $final = $bal + $dep - $with;
        echo "Final Balance: ₱$final";
    }
    echo "<hr>";

    // 10. Simple Grading System
    ?>
    <h2>10. Simple Grading System</h2>
    <form method="post">
        Math: <input type="number" name="math">
        English: <input type="number" name="english">
        Science: <input type="number" name="science">
        <input type="submit" name="grade" value="Compute">
    </form>
    <?php
    if (isset($_POST['grade'])) {
        $m = $_POST['math'];
        $e = $_POST['english'];
        $s = $_POST['science'];
        $avg = ($m + $e + $s) / 3;
        if ($avg >= 90) $g = "A";
        elseif ($avg >= 80) $g = "B";
        elseif ($avg >= 70) $g = "C";
        else $g = "F";
        echo "Average: " . round($avg, 2) . "<br>Grade: $g";
    }
    echo "<hr>";

    // 11. Currency Converter
    ?>
    <h2>11. Currency Converter</h2>
    <form method="post">
        PHP Amount: <input type="number" name="php" step="any">
        <input type="submit" name="convert" value="Convert">
    </form>
    <?php
    if (isset($_POST['convert'])) {
        $php = $_POST['php'];
        $usd = $php * 0.018;
        $eur = $php * 0.016;
        $jpy = $php * 2.7;
        echo "PHP $php = USD $usd<br>";
        echo "PHP $php = EUR $eur<br>";
        echo "PHP $php = JPY $jpy";
    }
    echo "<hr>";

    // 12. Travel Cost Estimator
    ?>
    <h2>12. Travel Cost Estimator</h2>
    <form method="post">
        Distance (km): <input type="number" name="distance" step="any">
        Fuel Consumption (km/l): <input type="number" name="consumption" step="any">
        Fuel Price (₱/liter): <input type="number" name="price" step="any">
        <input type="submit" name="travel" value="Estimate">
    </form>
    <?php
    if (isset($_POST['travel'])) {
        $d = $_POST['distance'];
        $c = $_POST['consumption'];
        $p = $_POST['price'];
        $fuel_needed = $d / $c;
        $total = $fuel_needed * $p;
        echo "Estimated Travel Cost: ₱" . round($total, 2);
    }
    ?>
</body>
</html>
