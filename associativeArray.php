<?php
$students = array("rohan" => 21, "Aniket" => 23, "tejas" => 21, "vinayak" => 36);

while (true) {
    // Display menu options
    echo "\nMenu:\n";
    echo "1. Display elements with keys\n";
    echo "2. Display the size of the array\n";
    echo "3. Delete an element by key\n";
    echo "4. Reverse key-value pairs\n";
    echo "5. Traverse elements in random order\n";
    echo "6. Exit\n";

    // Get user choice
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            // Display elements with keys
            echo "Array Elements:\n";
            foreach ($students as $key => $value) {
                echo "$key => $value\n";
            }
            break;

        case 2:
            // Display the size of the array
            echo "Size of the array: " . count($students) . "\n";
            break;

        case 3:
            // Delete an element by key
            $keyToDelete = readline("Enter the key to delete: ");
            if (isset($students[$keyToDelete])) {
                unset($students[$keyToDelete]);
                echo "Element deleted successfully.\n";
            } else {
                echo "Key not found!\n";
            }
            break;

        case 4:
            // Reverse key-value pairs
            $students = array_flip($students);
            echo "Array after flipping keys and values:\n";
            print_r($students);
            break;

        case 5:
            // Traverse elements in random order
            $shuffledArray = $students; // Copy the array
            shuffle($shuffledArray); // Shuffle the copied array
            echo "Array in random order:\n";
            print_r($shuffledArray);
            break;

        case 6:
            // Exit the program
            echo "Exiting program.\n";
            exit();

        default:
            echo "Invalid choice! Please enter a valid option.\n";
    }
}
?>