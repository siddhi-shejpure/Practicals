<html>
<head>
    <title>String Analysis</title>
</head>
<body>
    <form method="post">
        <label>Enter a string:</label><br>
        <input type="text" name="input_string" required><br><br>
        <input type="submit" name="submit" value="Analyze">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = strtolower($_POST['input_string']);

        function countVowels($str) {
            return preg_match_all('/[aeiou]/', $str);
        }

        function vowelOccurrences($str) {
            $vowels = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
            foreach (str_split($str) as $char) {
                if (isset($vowels[$char])) {
                    $vowels[$char]++;
                }
            }
            return $vowels;
        }

        function isPalindrome($str) {
            $length = strlen($str);
            for ($i = 0; $i < $length / 2; $i++) {
                if ($str[$i] !== $str[$length - $i - 1]) {
                    return false;
                }
            }
            return true;
        }

        echo "<h3>Results:</h3>";
        echo "Total Vowels: " . countVowels($str) . "<br>";
        
        $vowelCounts = vowelOccurrences($str);
        echo "Vowel Occurrences:<br>";
        foreach ($vowelCounts as $vowel => $count) {
            echo "$vowel: $count<br>";
        }

        echo "Palindrome Check: " . (isPalindrome($str) ? "Yes, it is a palindrome" : "No, it is not a palindrome") . "<br>";
    }
    ?>
</body>
</html>