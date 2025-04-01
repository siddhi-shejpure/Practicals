<?php
$servername = "localhost";
$username = "root";    
$password = "";       
$dbname = "assignment06"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$hosp_name = $_GET['hosp_name'] ?? ''; 

if ($hosp_name) {
    $hosp_name = $conn->real_escape_string($hosp_name); 

    $sql = "SELECT d.doc_name, d.address, d.city, d.area
            FROM doctors d
            JOIN hospitals h ON d.hosp_id = h.hosp_id
            WHERE h.hosp_name = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $hosp_name); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h3>Doctors at " . htmlspecialchars($hosp_name) . ":</h3>";
        echo "<table border='1'>
                <tr>
                    <th>Doctor Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Area</th>
                </tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['doc_name']) . "</td>
                    <td>" . htmlspecialchars($row['address']) . "</td>
                    <td>" . htmlspecialchars($row['city']) . "</td>
                    <td>" . htmlspecialchars($row['area']) . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No doctors found for the hospital: " . htmlspecialchars($hosp_name);
    }

    $stmt->close(); // Close the prepared statement
} else {
    echo "Please provide a hospital name.";
}

// Close the database connection
$conn->close();
?>

<!-- Step 5: Hospital name input form -->
<form method="GET" action="doctor_hospital.php">
    <label for="hosp_name">Enter Hospital Name:</label>
    <input type="text" name="hosp_name" id="hosp_name" required>
    <input type="submit" value="Search">
</form>