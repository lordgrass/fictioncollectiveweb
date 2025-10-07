<?php
$host = 'localhost:3306';
$username = 'enadasatesting';
$password = 'fEZggSotn5f26q&$';
$database = 'contentdb';
$table = 'content';
$field = 'string_column';
// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query to fetch all video IDs from the Notes field
$sql = "SELECT $field FROM $table";
$result = $conn->query($sql);

// Display embedded YouTube videos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $videoId = htmlspecialchars($row[$field]);
        echo '<div style="padding: 15px; display: inline-block;"><iframe style="border-radius: 15px; border: 5px solid white;" width="400" height="225" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="2" allowfullscreen></iframe></div>';
    }
} else {
    echo "No videos found in the '$field' field.";
}
// Close the connection
$conn->close();
?>

