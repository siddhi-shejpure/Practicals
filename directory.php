<?php
echo  "Enter the directory path: ";
$dir = trim(fgets(STDIN));

if (is_dir($dir)) {
    $files = scandir($dir);
    echo "Contents of directory '$dir':\n";
    foreach ($files as $file) {
        echo $file . "\n";
    }
} else {
    echo "Invalid directory.\n";
}
?>
