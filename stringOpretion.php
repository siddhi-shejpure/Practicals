<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="post">
        <label>Enter the large string:</label><br>
        <input type="text" name="large_string" required><br><br>

        <label>Enter the small string:</label><br>
        <input type="text" name="small_string" required><br><br>

        <label>Enter the replacement string:</label><br>
        <input type="text" name="replace_string" required><br><br>

        <input type="submit" name="submit" value="Process">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $large_string = $_POST['large_string'];
        $small_string = $_POST['small_string'];
        $replace_string = $_POST['replace_string'];

        // Find first and last occurrence
        $first_pos = strpos($large_string, $small_string);
        $last_pos = strrpos($large_string, $small_string);

        // Count total occurrences
        $count_occurrences = substr_count($large_string, $small_string);

        // Replace occurrences
        $replaced_string = str_replace($small_string, $replace_string, $large_string);

        // Display results
        echo "<h3>Results:</h3>";
        echo "First Occurrence Position: " . ($first_pos !== false ? $first_pos : "Not found") . "<br>";
        echo "Last Occurrence Position: " . ($last_pos !== false ? $last_pos : "Not found") . "<br>";
        echo "Total Occurrences: $count_occurrences <br>";
        echo "Modified String: $replaced_string <br>";
    }
    ?>
</body>
</html>