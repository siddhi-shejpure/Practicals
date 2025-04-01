<?php
$filename = "stud.dat";

if (!file_exists($filename)) {
    die("<p style='color:red;'>Error: File student.dat not found!</p>");
}

$file = fopen($filename, "r");

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Marks</title>
    <style>
        table { width: 60%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Student Marks Report</h2>
    <table>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Marks1</th>
            <th>Marks2</th>
            <th>Marks3</th>
            <th>Percentage</th>
        </tr>";

while (($line = fgets($file)) !== false) {
    $data = explode(" ", trim($line));

    if (count($data) < 5) {
        continue;
    }

    $rollNo = $data[0];
    $name = $data[1];
    $marks1 = (int)$data[2];
    $marks2 = (int)$data[3];
    $marks3 = (int)$data[4];

    $totalMarks = $marks1 + $marks2 + $marks3;
    $percentage = $totalMarks / 3;

    echo "<tr>
            <td>$rollNo</td>
            <td>$name</td>
            <td>$marks1</td>
            <td>$marks2</td>
            <td>$marks3</td>
            <td>" . number_format($percentage, 2) . "%</td>
          </tr>";
}

echo "</table></body></html>";

fclose($file);
?>
