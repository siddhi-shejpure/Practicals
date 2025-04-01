<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>
    <h2>Enter Two Numbers</h2>
    <form action="result.php" method="post">
        <label>Number 1:</label>
        <input type="number" name="num1" required><br><br>

        <label>Number 2:</label>
        <input type="number" name="num2" required><br><br>

        <label>Select Operation:</label><br>
        <input type="radio" name="operation" value="add" required> Addition (+)<br>
        <input type="radio" name="operation" value="subtract"> Subtraction (-)<br>
        <input type="radio" name="operation" value="multiply"> Multiplication (*)<br>
        <input type="radio" name="operation" value="divide"> Division (/)<br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>