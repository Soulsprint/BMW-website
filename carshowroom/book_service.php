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
$email = $_POST['email'];
$phone = $_POST['phone'];
$car_model = $_POST['car_model'];
$service_date = $_POST['service_date'];
$message = $_POST['message'];

// Prepare SQL statement to prevent SQL Injection
$stmt = $conn->prepare("INSERT INTO service_bookings (name, email, phone, car_model, service_date, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $car_model, $service_date, $message);

// Execute and check if successful
if ($stmt->execute()) {
    echo "<script>alert('Service booked successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
