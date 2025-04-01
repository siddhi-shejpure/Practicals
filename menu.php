<?php
echo "Enter the file name: ";
$file = trim(fgets(STDIN));
if (!file_exists($file)) {
    echo "File does not exist.\n";
    exit;
}

while (true) {
    echo "\nChoose an option:\n";
    echo "1. File Size\n";
    echo "2. File Path Information\n";
    echo "3. Last Modified Time\n";
    echo "4. Exit\n";
    echo "Enter your choice: ";
$choice = trim(fgets(STDIN));
switch ($choice) {
        case 1:
            echo "File size: " . filesize($file) . " bytes\n";
            break;
        case 2:
            $info = pathinfo($file);
            echo "Directory Name: " . dirname($file) . "\n";
            echo "Base Name: " . $info['basename'] . "\n";
            echo "Extension: " . (isset($info['extension']) ? $info['extension'] :  "No extension") . "\n";
            echo "File Name: " . $info['filename'] . "\n";
            break;
        case 3:
            echo "Last Modified Time: " . date("F d Y H:i:s", filemtime($file)) . "\n";
            break;
        case 4:
            exit("Exiting...\n");
        default:
            echo "Invalid choice. Try again.\n";
    }
}
?>
