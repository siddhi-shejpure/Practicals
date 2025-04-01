<html>
<head>
    <title>Calculation Result</title>
</head>
<body>
    <h2>Calculation Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<p>Result: $num1 + $num2 = $result</p>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "<p>Result: $num1 - $num2 = $result</p>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "<p>Result: $num1 × $num2 = $result</p>";
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                } else {
                    $result = $num1 / $num2;
                    echo "<p>Result: $num1 ÷ $num2 = $result</p>";
                }
                break;
            default:
                echo "<p>Invalid operation selected.</p>";
        }
    }
    ?>
    <br><a href="index.php">Go Back</a>
</body>
</html>