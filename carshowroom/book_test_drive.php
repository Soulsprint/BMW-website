<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = ""; 
$database = "car_showroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$car_model = $_POST['car_model'];

// Prepare SQL statement to prevent SQL Injection
$stmt = $conn->prepare("INSERT INTO test_drive_bookings (name, phone, car_model) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $phone, $car_model);

// Execute and check if successful
if ($stmt->execute()) {
    echo "<script>alert('Test drive booked successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
