<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercises</title>
</head>
<body>
    <h1>PHP Exercises</h1>

    <?php
    // 1. Introduce Yourself
    echo "<h2>1. Introduce Yourself</h2>";
    $name = "Arthur Pagaduan Jr. S.";
    $age = 24;
    $fav_color = "Black";
    echo "Hi, I’m $name, I am $age years old, and my favorite color is $fav_color.";
    echo "<hr>";

    // 2. Simple Math
    echo "<h2>2. Simple Math</h2>";
    $a = 420;
    $b = 69;
    echo "Sum: " . ($a + $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";
    echo "Product: " . ($a * $b) . "<br>";
    echo "Quotient: " . ($a / $b);
    echo "<hr>";

    // 3. Area and Perimeter of a Rectangle
    echo "<h2>3. Area and Perimeter of a Rectangle</h2>";
    $length = 9;
    $width = 4;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "Area: $area <br>";
    echo "Perimeter: $perimeter";
    echo "<hr>";

    // 4. Temperature Converter
    echo "<h2>4. Temperature Converter</h2>";
    $celsius = 36;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "$celsius°C is equal to $fahrenheit°F";
    echo "<hr>";

    // 5. Swapping Variables
    echo "<h2>5. Swapping Variables</h2>";
    $x = 100;
    $y = 200;
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "After swapping: x = $x, y = $y";
    echo "<hr>";

    // 6. Salary Calculator
    echo "<h2>6. Salary Calculator</h2>";
    $basic_salary = 30000;
    $allowance = 3000;
    $deduction = 1500;
    $net_salary = $basic_salary + $allowance - $deduction;
    echo "Net Salary: ₱$net_salary";
    echo "<hr>";

    // 7. BMI Calculator
    echo "<h2>7. BMI Calculator</h2>";
    $weight = 62; // kgs
    $height = 1.67; // meters
    $bmi = $weight / ($height * $height);
    echo "My BMI is " . round($bmi, 2);
    echo "<hr>";

    // 8. String Manipulation
    echo "<h2>8. String Manipulation</h2>";
    $sentence = "Learning PHP is SUPEEEEEEEEER fun and useful!";
    echo "# of characters: " . strlen($sentence) . "<br>";
    echo "# of words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence);
    echo "<hr>";

    // 9. Bank Account Simulation
    echo "<h2>9. Bank Account Simulation</h2>";
    $balance = 10000;
    $deposit = 2500;
    $withdraw = 3000;
    $balance = $balance + $deposit - $withdraw;
    echo "Final Balance: ₱$balance";
    echo "<hr>";

    // 10. Simple Grading System
    echo "<h2>10. Simple Grading System</h2>";
    $math = 85;
    $english = 90;
    $science = 88;
    $average = ($math + $english + $science) / 3;
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } else {
        $grade = "F";
    }
    echo "Average: " . round($average, 2) . "<br>";
    echo "Grade: $grade";
    echo "<hr>";

    // 11. Currency Converter
    echo "<h2>11. Currency Converter</h2>";
    $php = 1000;
    $usd_rate = 0.018; // Example conversion rates
    $eur_rate = 0.016;
    $jpy_rate = 2.7;
    echo "PHP $php = USD " . ($php * $usd_rate) . "<br>";
    echo "PHP $php = EUR " . ($php * $eur_rate) . "<br>";
    echo "PHP $php = JPY " . ($php * $jpy_rate);
    echo "<hr>";

    // 12. Travel Cost Estimator
    echo "<h2>12. Travel Cost Estimator</h2>";
    $distance = 300; // in km
    $fuel_consumption = 12; // km per liter
    $fuel_price = 65; // per liter in PHP
    $fuel_needed = $distance / $fuel_consumption;
    $total_cost = $fuel_needed * $fuel_price;
    echo "Estimated Travel Cost: ₱" . round($total_cost, 2);
    ?>
</body>
</html>
