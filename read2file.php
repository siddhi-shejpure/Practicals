<?php
echo "Enter the first file name: ";
$firstFile = trim(fgets(STDIN));
echo "Enter the second file name: ";
$secondFile = trim(fgets(STDIN));

if (file_exists($firstFile) && file_exists($secondFile)) {
    $content = file_get_contents($firstFile);
    file_put_contents($secondFile, $content, FILE_APPEND);
    echo "Contents appended successfully.\n";
} else {
    echo "One or both files do not exist.\n";
}
?>
