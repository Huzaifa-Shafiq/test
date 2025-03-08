<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $section = $_POST['section'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $table = '';

    switch ($section) {
        case 'about':
            $table = 'about';
            break;
        case 'skills':
            $table = 'skills';
            break;
        case 'clients':
            $table = 'clients';
            break;
        default:
            die('Invalid section');
    }

    $stmt = $conn->prepare("INSERT INTO $table (title, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $description);

    if ($stmt->execute()) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
