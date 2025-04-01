<?php

$xmlFile = 'students.xml';
function loadXML() {
    global $xmlFile;
    return file_exists($xmlFile) ? simplexml_load_file($xmlFile) : exit("Error: XML file not found!\n");
}

function saveXML($xml) {
    global $xmlFile;
    $xml->asXML($xmlFile);
    echo "Changes saved successfully!\n";
}

function searchStudent($id) {
    foreach (loadXML()->department as $dept) {
        foreach ($dept->student as $s) {
            if ((string) $s->id === $id) {
                echo "ID: $s->id\nName: $s->name\nAge: $s->age\nCourse: $s->course\nYear: $s->enrollment_year\nDept: {$dept['name']}\n";
                return;
            }
        }
    }
    echo "Student with ID $id not found.\n";
}

function addStudent() {
    $xml = loadXML();
    echo "Enter Department: "; $deptName = trim(fgets(STDIN));

    foreach ($xml->department as $dept) {
        if ((string) $dept['name'] === $deptName) {
            $s = $dept->addChild('student');
            echo "ID: "; $s->addChild('id', trim(fgets(STDIN)));
            echo "Name: "; $s->addChild('name', trim(fgets(STDIN)));
            echo "Age: "; $s->addChild('age', trim(fgets(STDIN)));
            echo "Course: "; $s->addChild('course', trim(fgets(STDIN)));
            echo "Year: "; $s->addChild('enrollment_year', trim(fgets(STDIN)));
            saveXML($xml);
            return;
        }
    }
    echo "Department not found!\n";
}

function updateEnrollmentYear($id) {
    $xml = loadXML();
    foreach ($xml->department as $dept) {
        foreach ($dept->student as $s) {
            if ((string) $s->id === $id) {
                echo "Current Year: $s->enrollment_year\nNew Year: ";
                $s->enrollment_year = trim(fgets(STDIN));
                saveXML($xml);
                return;
            }
        }
    }
    echo "Student with ID $id not found.\n";
}

while (true) {
    echo "\n1. Search\n2. Add Student\n3. Update Year\n4. Exit\nChoice: ";
    switch (trim(fgets(STDIN))) {
        case '1': echo "Student ID: "; searchStudent(trim(fgets(STDIN))); break;
        case '2': addStudent(); break;
        case '3': echo "Student ID: "; updateEnrollmentYear(trim(fgets(STDIN))); break;
        case '4': exit("Goodbye!\n");
        default: echo "Invalid choice!\n";
    }
}
?>