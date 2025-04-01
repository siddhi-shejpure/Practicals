<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment06"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['actor_name']) && !empty($_GET['actor_name'])) {
    $actor_name = $_GET['actor_name'];
    $actor_name = $conn->real_escape_string($actor_name); 

    $sql = "SELECT m.movie_name FROM Movie m
            JOIN Movie_Actor ma ON m.movie_no = ma.movie_no
            JOIN Actor a ON ma.actor_no = a.actor_no
            WHERE a.name = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $actor_name);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Movies that " . htmlspecialchars($actor_name) . " has acted in:</h3>";
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['movie_name']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No movies found for the actor: " . htmlspecialchars($actor_name);
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert_movie'])) {
    $movie_name = $_POST['movie_name'];
    $release_year = $_POST['release_year'];

    $sql = "INSERT INTO Movie (movie_name, release_year) VALUES (?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $movie_name, $release_year);
    if ($stmt->execute()) {
        echo "New movie inserted successfully.<br>";
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }

    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_movie'])) {
    $movie_name = $_POST['update_movie_name'];
    $new_release_year = $_POST['new_release_year'];

    $sql = "UPDATE Movie SET release_year = ? WHERE movie_name = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $new_release_year, $movie_name);
    
    if ($stmt->execute()) {
        echo "Movie release year updated successfully.<br>";
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database</title>
</head>
<body>
    <h1>Movie Database Operations</h1>

    <h2>Search Movies by Actor Name</h2>
    <form method="GET" action="">
        <label for="actor_name">Actor Name:</label>
        <input type="text" name="actor_name" id="actor_name" required>
        <input type="submit" value="Search">
    </form>
    <br>

    <h2>Insert a New Movie</h2>
    <form method="POST" action="">
        <label for="movie_name">Movie Name:</label>
        <input type="text" name="movie_name" id="movie_name" required>
        <br>
        <label for="release_year">Release Year:</label>
        <input type="number" name="release_year" id="release_year" required>
        <br>
        <input type="submit" name="insert_movie" value="Insert Movie">
    </form>
    <br>

    <h2>Update Movie Release Year</h2>
    <form method="POST" action="">
        <label for="update_movie_name">Movie Name:</label>
        <input type="text" name="update_movie_name" id="update_movie_name" required>
        <br>
        <label for="new_release_year">New Release Year:</label>
        <input type="number" name="new_release_year" id="new_release_year" required>
        <br>
        <input type="submit" name="update_movie" value="Update Movie Year">
    </form>

</body>
</html>