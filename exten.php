<?php
echo "Enter the directory path: ";
$dir = trim(fgets(STDIN));
echo "Enter the file extension: ";
$extension = trim(fgets(STDIN));

if (is_dir($dir)) {
    $files = scandir($dir);
    echo "Files with .$extension extension:\n";
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === $extension) {
            echo $file . "\n";
        }
    }
} else {
    echo "Invalid directory.\n";
}
?>
