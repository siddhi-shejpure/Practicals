<?php
$employees = array(
    array("ID" => 1, "Name" => "John Doe", "Department" => "HR", "Salary" => 50000),
    array("ID" => 2, "Name" => "Jane Smith", "Department" => "IT", "Salary" => 60000),
    array("ID" => 3, "Name" => "Alice Johnson", "Department" => "Finance", "Salary" => 55000),
    array("ID" => 4, "Name" => "Bob Brown", "Department" => "Marketing", "Salary" => 45000)
);

echo "Employee Details:\n";
foreach ($employees as $employee) {
    echo "ID: " . $employee["ID"] . ", ";
    echo "Name: " . $employee["Name"] . ", ";
    echo "Department: " . $employee["Department"] . ", ";
    echo "Salary: $" . $employee["Salary"] . "\n";
}
echo "\n";

$totalSalary = 0; 
foreach ($employees as $employee) {
    $totalSalary += $employee["Salary"]; 
}
echo "Total Salary Expenditure: $" . $totalSalary . "\n\n";

$highestSalary = 0; 
$highestPaidEmployee = null;
foreach ($employees as $employee) {
    if ($employee["Salary"] > $highestSalary) {
        $highestSalary = $employee["Salary"]; 
        $highestPaidEmployee = $employee; 
    }
}
echo "Employee with the Highest Salary:\n";
echo "ID: " . $highestPaidEmployee["ID"] . ", ";
echo "Name: " . $highestPaidEmployee["Name"] . ", ";
echo "Department: " . $highestPaidEmployee["Department"] . ", ";
echo "Salary: $" . $highestPaidEmployee["Salary"] . "\n";
?>