<html>
<head>
    <title>PHP String Form</title>
</head>
<body>
    <form method="post">
        <label>Enter the large string:</label><br>
        <input type="text" name="large_string" required><br><br>
        
        <label>Enter the small string:</label><br>
        <input type="text" name="small_string" required><br><br>
        
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $large_string = $_POST['large_string'];
        $small_string = $_POST['small_string'];

        // Check if small string appears at the start of large string using regex
        if (preg_match("/^" . preg_quote($small_string, '/') . "/", $large_string)) {
            echo "<p>The small string appears at the start of the large string.</p>";
        } else {
            echo "<p>The small string does not appear at the start of the large string.</p>";
        }

        // Split the large string into separate words
        $words = preg_split('/\s+/', $large_string);
        echo "<p>Words in the large string:</p><ul>";
        foreach ($words as $word) {
            echo "<li>" . htmlspecialchars($word) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>