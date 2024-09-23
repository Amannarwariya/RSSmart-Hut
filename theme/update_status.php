<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "lodhiaman@123";
$dbname = "rssmart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $device = $_POST['device'];
    $status = $_POST['status'];

    // Map device names to table names
    $tableMap = [
        'Light1' => 'Light1',
        'Blender' => 'Blender',
        'Switch' => 'Switch',
        'Fan' => 'Fan',
        'AC' => 'AC'
    ];

    if (array_key_exists($device, $tableMap)) {
        $table = $tableMap[$device];

        // Insert into the appropriate table
        $sql = "INSERT INTO $table (status) VALUES ('$status')";

        if ($conn->query($sql) === TRUE) {
            echo "Status of $device updated successfully to $status";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid device.";
    }
}

$conn->close();
?>
